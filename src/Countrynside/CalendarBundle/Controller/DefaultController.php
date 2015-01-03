<?php

namespace Countrynside\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Countrynside\CalendarBundle\Entity\Booking;

class DefaultController extends Controller
{

    public function indexAction($event)
    {
        $eve = $this->getDoctrine()
                ->getRepository('CountrynsideSiteBundle:Event')
                ->find($event);
        if ($eve != null)
        {
            $name = $eve->getTitre();
            return $this->render('CountrynsideCalendarBundle:Default:index.html.twig', array('event' => $event, 'name' => $name));
        } else
        {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    public function indexAdminAction($event)
    {
        $id = $this->getUser()->getId();
        $eve = $this->getDoctrine()
                ->getRepository('CountrynsideSiteBundle:Event')
                ->find($event);
        if ($eve != null)
        {
            if ($id == $eve->getUser()->getId())
            {
                $name = $eve->getTitre();
                return $this->render('CountrynsideCalendarBundle:Default:indexAdmin.html.twig', array('event' => $event, 'name' => $name));
            } else
            {
                throw $this->createNotFoundException('Page non trouvée');
            }
        } else
        {
            throw $this->createNotFoundException('Page non trouvée');
        }
    }

    public function calendarDisplayAction($user, $event, $name)
    {
        $em = $this->getDoctrine()->getManager();

        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');

        $items = $em->getRepository('CountrynsideCalendarBundle:Item')->findBy(array(), array('position' => 'ASC'));
        $item = $em->getRepository('CountrynsideCalendarBundle:Item')->findOneBy(array('id_event' => $event), array('position' => 'ASC'), 1, 1)->getId();
        $states = $em->getRepository('CountrynsideCalendarBundle:State')->findBy(array(), array('position' => 'ASC'));

        return $this->render('CountrynsideCalendarBundle:Default:calendar.html.twig', array(
                    'name' => $name,
                    'year' => $year,
                    'month' => $month,
                    'day' => $day,
                    'user' => $user,
                    'items' => $items,
                    'item' => $item,
                    'states' => $states,
        ));
    }

    public function calendarAction()
    {
        $oneday = new \DateInterval('P1D');

        $em = $this->getDoctrine()->getManager();

        $states = $em->getRepository('CountrynsideCalendarBundle:State')->findBy(array(), array("position" => 'ASC'), 1, 0);
        foreach ($states as $state)
        {
            $defaultClass = $state->getClass();
        }

        $request = $this->get('request');
        $yearKey = intval($request->request->get('year'));
        $monthKey = intval($request->request->get('month'));
        $itemId = intval($request->request->get('itemId'));
        if ($monthKey == 0)
            $monthKey = 12;

        $item = $em->getRepository('CountrynsideCalendarBundle:Item')->find($itemId);
        if (!$item)
        {
            $return = '{"responseCode" : "400", "message" : "the item selected does not exist - please restart the application"}';
            return new Response($return, 200, array('Content-Type' => 'application/json'));
        }

        $lowLimit = new \DateTime();
        $highLimit = new \DateTime();
        $lowLimit->setDate($yearKey, $monthKey, 1);
        $lowLimit->sub($oneday);
        $highLimit->setDate($yearKey, $monthKey, 31);
        $highLimit->add($oneday);

        $er = $em->getRepository('CountrynsideCalendarBundle:Booking');
        $qb = $er->createQueryBuilder('a');
        $qb->where('a.theDate BETWEEN :lowLimit AND :highLimit')
                ->setParameter('lowLimit', $lowLimit)
                ->setParameter('highLimit', $highLimit)
                ->andWhere('a.item = :item')
                ->setParameter('item', $item)
        ;
        $entities = $qb->getQuery()->getResult();
        $bookings = array();
        foreach ($entities as $booking)
        {
            $key = $booking->getTheDate()->format('Y-m-d');
            $bookings[$key] = $booking->getState()->getClass();
        }

        $return = '';

        $current_month = $this->getMonth($monthKey);
        $title = htmlentities($current_month . " " . $yearKey, ENT_QUOTES);
        $return.='"current_month" : "' . $title . '" , ';

        $previous_month = $this->getOtherMonth($monthKey, $yearKey, -1);
        $days_previous_month = date('t', mktime(0, 0, 0, $previous_month[$monthKey], 1, $previous_month[$yearKey]));
        $return.='"days_previous_month" : "' . $days_previous_month . '" , ';

        $tab_days = array();
        $tab_booked = array();
        $tab_class = array();
        $tab_dates = array();

        $num_day = $this->getFirstDay($monthKey, $yearKey);
        $count = 1;
        $num_day_current = 1;
        $nb_days_prev = 0;

        while ($count < 43)
        {
            if ($count < $num_day)
            {
                $nb_days_prev++;
                $tab_days[$count] = 0;
                $tab_booked[$count] = -1;
                $tab_class[$count] = "";
                $tab_dates[$count] = "";
            } else
            {
                if (checkdate($monthKey, $num_day_current, $yearKey))
                {
                    $datetime = new \DateTime();
                    $date = $datetime->setDate($yearKey, $monthKey, $num_day_current)->format('Y-m-d');
                    $tab_dates[$count] = $date;
                    if (array_key_exists($date, $bookings))
                    {
                        $tab_days[$count] = $num_day_current;
                        $tab_booked[$count] = 1;
                        $tab_class[$count] = $bookings[$date];
                    } else
                    {
                        $tab_days[$count] = $num_day_current;
                        $tab_booked[$count] = 0;
                        $tab_class[$count] = $defaultClass;
                    }

                    $num_day_current++;
                } else
                {
                    $tab_days[$count] = $count - $num_day_current - $nb_days_prev + 1;
                    $tab_booked[$count] = -2;
                    $tab_class[$count] = "";
                    $tab_dates[$count] = "";
                }
            }
            $count++;
        }

        $return.='"nb_days_prev" : "' . $nb_days_prev . '" , ';

        if (!empty($tab_days))
        {
            $return.=' "calendar" : [ ';
            $count = 1;
            while ($count < 43)
            {
                if ($count == 42)
                {
                    $return.=' { "fill" : "' . $tab_days[$count] . '", "booked" : "' . $tab_booked[$count] . '", "classe" : "' . $tab_class[$count] . '", "dates" : "' . $tab_dates[$count] . '" } ';
                } else
                {
                    $return.=' { "fill" : "' . $tab_days[$count] . '", "booked" : "' . $tab_booked[$count] . '", "classe" : "' . $tab_class[$count] . '", "dates" : "' . $tab_dates[$count] . '" } , ';
                }
                $count++;
            }
            $return.=' ] ';
        }
        $return.=' } ';
        $return = '{"responseCode" : "200", ' . $return;

        return new Response($return, 200, array('Content-Type' => 'application/json'));
    }

    public function ajaxAdminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $request = $this->get('request');
        $date = $request->request->get('date');
        $id = $request->request->get('id');
        $itemId = $request->request->get('itemId');
        $clickMethod = $request->request->get('clickMethod');

        $item = $em->getRepository('CountrynsideCalendarBundle:Item')->find($itemId);
        if (!$item)
        {
            $return = '{"responseCode" : "400", "message" : "the item selected does not exist - please restart the application"}';
            return new Response($return, 200, array('Content-Type' => 'application/json'));
        }

        if ($clickMethod > 0)
        {
            $stateSelected = $em->getRepository('CountrynsideCalendarBundle:State')->find($clickMethod);
            if (!$stateSelected)
            {
                $return = '{"responseCode" : "400", "message" : "the state selected does not exist - please restart the application"}';
                return new Response($return, 200, array('Content-Type' => 'application/json'));
            }
        }

        $yearKey = substr($date, 0, 4);
        $monthKey = substr($date, 5, 2);
        $dayKey = substr($date, 8, 2);
        $target = new \DateTime();
        $target->setDate($yearKey, $monthKey, $dayKey);
        $target->setTime(0, 0, 0);

        $er = $em->getRepository('CountrynsideCalendarBundle:Booking');
        $qb = $er->createQueryBuilder('a');
        $qb->where('a.theDate = :theDate')
                ->setParameter('theDate', $target)
                ->andWhere('a.item = :item')
                ->setParameter('item', $item)
        ;
        $entity = $qb->getQuery()->getOneOrNullResult();

        $return = '';

        $return.='"id_returned" : "' . $id . '" , ';
        $return.='"date_returned" : "' . $date . '" , ';

        if ($entity == null)
        {
            $booking = new Booking();
            $booking->setTheDate($target);
            $booking->setItem($item);
            if ($clickMethod == 0)
            {
                $states = $em->getRepository('CountrynsideCalendarBundle:State')->findBy(array(), array("position" => 'ASC'), 1, 1);
                foreach ($states as $state)
                {
                    $booking->setState($state);
                }
            } else
            {
                $booking->setState($stateSelected);
            }
            $em->persist($booking);
            $em->flush();
            $return.='"state" : "' . $booking->getState()->getClass() . '" }';
        } else
        {
            if ($clickMethod == 0)
            {
                $currentState = $entity->getState()->getId();
                $states = $em->getRepository('CountrynsideCalendarBundle:State')->findBy(array(), array("position" => 'ASC'));
                $i = 1;
                $test = 0;
                foreach ($states as $state)
                {
                    if ($i == 1)
                        $first = $state;
                    if ($test == 0)
                    {
                        if ($state->getId() == $currentState)
                            $test = 1;
                    }
                    elseif ($test == 1)
                    {
                        $entity->setState($state);
                        $test = 2;
                        break;
                    }
                    $i++;
                }
                if ($test == 1)
                    $entity->setState($first);
            }
            else
            {
                $entity->setState($stateSelected);
            }
            $em->persist($entity);
            $em->flush();
            $return.='"state" : "' . $entity->getState()->getClass() . '" }';
        }

        $return = '{"responseCode" : "200", ' . $return;

        return new Response($return, 200, array('Content-Type' => 'application/json'));
    }

    //Function returning the name of the month based on its number - accents are javascript encoded
    function getMonth($monthKey)
    {
        $monthKey = sprintf("%d", $monthKey);
        $tab_mois = array(1 => "Janvier", "F\351vrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Ao\373t", "Septembre", "Octobre", "Novembre", "D\351cembre");
        return $tab_mois[$monthKey];
    }

    //Function returning following or previous month and year based on $pas
    function getOtherMonth($monthKey, $yearKey, $pas)
    {
        $tmstp_suivant = mktime(0, 0, 0, ($monthKey + $pas), 1, $yearKey);
        $date_suivante[$monthKey] = date("m", $tmstp_suivant);
        $date_suivante[$yearKey] = date("Y", $tmstp_suivant);
        return $date_suivante;
    }

    //Function returning the first day of the month
    function getFirstDay($monthKey, $yearKey)
    {
        $tmstp = mktime(0, 0, 0, $monthKey, 1, $yearKey);
        $dayKey = date("w", $tmstp);

        $tab_jour = array(0 => 7, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

        return $tab_jour[$dayKey];
    }

}
