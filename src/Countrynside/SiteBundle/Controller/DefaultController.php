<?php

namespace Countrynside\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Countrynside\SiteBundle\Entity\Event;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('CountrynsideSiteBundle:Default:index.html.twig');
    }

    public function connexionAction() {
        return $this->render('CountrynsideSiteBundle:Default:connexion.html.twig');
    }

    public function annonceAction(Request $request) {

        $user = $this->getUser();
        $event = new Event();
        $event->setDatePub(new \DateTime());
        $event->setUser($user);

        $form = $this->createForm('event', $event);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->get('session')->getFlashBag()->add(
                    'valid', 'Votre annonce a bien été sauvegardée'
            );
            $em = $this->getDoctrine()->getManager();
            $event->upload($user->getId());
            $em->persist($event);
            $em->flush();
            return $this->redirect($this->generateUrl('countrynside_site_mes_annonces'));
        }
        return $this->render('CountrynsideSiteBundle:Default:annonce.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function mesAnnoncesAction() {
        $id = $this->getUser()->getId();
        $user = $this->getDoctrine()
                ->getRepository('CountrynsideUserBundle:User')
                ->find($id);

        $events = $user->getEvents();
        // var_dump($events);
        return $this->render('CountrynsideSiteBundle:Default:voir.html.twig', array('events' => $events, 'id' => $id));
    }

}
