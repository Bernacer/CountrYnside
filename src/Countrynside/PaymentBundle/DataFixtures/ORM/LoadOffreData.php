<?php

namespace Countrynside\PaymentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Countrynside\PaymentBundle\Entity\Offre;

class LoadOffreData implements FixtureInterface, \Symfony\Component\DependencyInjection\ContainerAwareInterface {

    private $container;
    
    public function load(ObjectManager $manager) {
        $offres = array();
        $offres[] = new Offre(1,3,"Abonnement 1 mois");
        $offres[] = new Offre(3,7,"Abonnement 3 mois");
        $offres[] = new Offre(6,12,"Abonnement 6 mois");
        $offres[] = new Offre(12,18,"Abonnement 1 an");
        foreach($offres as $offre){
            $manager->persist($offre);
        }
        $manager->flush();    
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
