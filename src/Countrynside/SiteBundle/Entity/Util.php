<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Region
 *
 * @author G3_Julien
 */

namespace Countrynside\SiteBundle\Entity;

class Util {

    public static function getRegion() {
        $region = array(
            "Alsace" => "Alsace",
            "Aquitaine" => "Aquitaine",
            "Auvergne" => "Auvergne",
            "Basse-Normandie" => "Basse-Normandie",
            "Bourgogne" => "Bourgogne",
            "Bretagne" => "Bretagne",
            "Centre" => "Centre",
            "Champagne-Ardenne" => "Champagne-Ardenne",
            "Corse" => "Corse",
            "Franche-Comté" => "Franche-Comté",
            "Haute-Normandie" => "Haute-Normandie",
            "Île-de-France" => "Île-de-France",
            "Languedoc-Roussillon" => "Languedoc-Roussillon",
            "Limousin" => "Limousin",
            "Lorraine" => "Lorraine",
            "Midi-Pyrénées" => "Midi-Pyrénées",
            "Nord-Pas-de-Calais" => "Nord-Pas-de-Calais",
            "Pays de la Loire" => "Pays de la Loire",
            "Picardie" => "Picardie",
            "Poitou-Charentes" => "Poitou-Charentes",
            "Provence-Alpes-Côte d'Azur" => "Provence-Alpes-Côte d'Azur",
            "Rhône-Alpes" => "Rhône-Alpes"
        );
        return $region;
    }

    public static function getCapacite() {
        $cap = array(
            "1 personne",
            "2 personnes",
            "3 personnes",
            "4 personnes",
            "5 personnes",
            "+10 personnes",
            "+50 personnes",
            "+100 personnes",
        );
        return $cap;
    }

    public static function getType() {
        $type = array(
            "Randonnée",
            "Festival",
            "Visite culturelle",
            "Spectacle",
            "Autre",
        );
        return $type;
    }

}
