<?php

namespace Countrynside\CalendarBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Countrynside\CalendarBundle\Entity\State;

class LoadStateData implements FixtureInterface {

    public function load(ObjectManager $manager) {
        $states = array();
        $states[] = new State("Disponible", "available", 0);
        $states[] = new State("Réservé", "booked", 0);
        $states[] = new State("Non-Disponible", "", 0);

        foreach ($states as $state) {
            $manager->persist($state);
        }

        $manager->flush();
    }

}
