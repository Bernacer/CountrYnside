<?php

namespace Countrynside\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Countrynside\SiteBundle\Entity\Event;

class LoadEventData implements FixtureInterface  {

    public function load(ObjectManager $manager) {

        $fichier = __DIR__.'/events.csv';
        if(file_exists($fichier))
        {
            echo('Lecture du fichier');
            $handle = fopen ($fichier,"r" );

            while ($lignes=fgets($handle))
            {
                list($titre,$type,$capacite,$region, $adresse,$telephone,$tarif,$descriptif,$path,$coord)=explode(";", $lignes);

                    $event = new Event();
                    $dt = new \DateTime();
                    $event->setTitre($titre);
                    $event->setType($type);
                    $event->setCapacite($capacite);
                    $event->setRegion($region);
                    $event->setAdresse($adresse);
                    $event->setTelephone($telephone);
                    $event->setTarif($tarif);
                    $event->setDescriptif($descriptif);
                    $event->setDatepub($dt);
                    $event->setPath($path);
                    $event->setPath($path);
                    $event->setCoord($coord);

                    $manager->persist($event);
            }

            fclose($handle);

            // On déclenche l'enregistrement
            $manager->flush(); // à decommenter pour l'insertion en bdd
        }
        else
        { echo('le fichier existe pas ');}
        // retour 0 si tout c'est bien execute
        return 0;
    }

}
