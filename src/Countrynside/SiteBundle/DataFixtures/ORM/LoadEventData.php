<?php

namespace Countrynside\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Countrynside\SiteBundle\Entity\Event;
use Countrynside\CalendarBundle\Entity\Item;

class LoadEventData extends AbstractFixture implements FixtureInterface,OrderedFixtureInterface  {

    public function load(ObjectManager $manager) {

        $fichier = __DIR__.'/events.csv';
        if(file_exists($fichier))
        {
            echo('Lecture du fichier');
            $handle = fopen ($fichier,"r" );
            $user = $this->getReference('Admin');
            while ($lignes=fgets($handle))
            {
                list($titre,$type,$capacite,$region, $adresse,$telephone,$tarif,$descriptif,$path,$coord)=explode(";", $lignes);

                    $event = new Event();
                    $dt = new \DateTime();
                    $event->setUser($user);
                    $event->setTitre($titre);
                    $event->setType($type);
                    $event->setCapacite($capacite);
                    $event->setRegion($region);
                    $event->setAdresse($adresse);
                    $event->setTelephone($telephone);
                    $event->setTarif($tarif);
                    $event->setDescriptif($descriptif);
                    $event->setDatepub($dt);
//                    $event->setPath($path);
                    $event->setCoord($coord);

                    $manager->persist($event);

                $item = new Item();
                $item->setIdEvent($event);
                $item->setName($event->getTitre());
                $item->setPosition(0);

                $manager->persist($item);
            }

            fclose($handle);

            $manager->flush();
        }
        else
        { echo('le fichier existe pas ');}
        // retour 0 si tout c'est bien execute
        return 0;
    }

    public function getOrder(){
        return 2;
    }

}
