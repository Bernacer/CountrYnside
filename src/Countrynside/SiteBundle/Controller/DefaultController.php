<?php

namespace Countrynside\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CountrynsideSiteBundle:Default:index.html.twig');
    }
    
    public function connexionAction()
    {
        return $this->render('CountrynsideSiteBundle:Default:connexion.html.twig');
    }
}
