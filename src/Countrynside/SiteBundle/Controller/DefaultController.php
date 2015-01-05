<?php

namespace Countrynside\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Countrynside\SiteBundle\Entity\Event;
use Countrynside\CalendarBundle\Entity\Item;
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
        $item = new Item();
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
            $item->setIdEvent($event);
            $item->setName($event->getTitre());
            $item->setPosition(0);
            $em->persist($item);
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

    public function chercherEventAction(Request $request) {
        if ($request->getMethod() == "GET") {
            $recherche = $request->get("infos_recherche");
            $dateD = $request->get("dateD");
            $dateF = $request->get("dateF");
            $mots = explode(" ", $recherche);
            $events = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('CountrynsideSiteBundle:Event')
                    ->findByMots($mots);
        }
        $eventsList = $this->get('knp_paginator')->paginate($events, $this->get('request')->query->get('page', 1), 6);
        return $this->render('CountrynsideSiteBundle:Default:rechercherEvennement.html.twig', array('events' => $eventsList));
    }

    public function infosEventCompletAction(Request $request) {
        $user = $this->getUser();
        if ($user->getPremium()) {
            $id_event = $request->get('event');
            $event = $this->getDoctrine()
                    ->getRepository('CountrynsideSiteBundle:Event')
                    ->find($id_event);
            return $this->render('CountrynsideSiteBundle:Default:infosEvennementComplet.html.twig', array('event' => $event));
        }
        return $this->render('CountrynsideSiteBundle:Default:devenirPremium.html.twig');
    }

}
