<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Countrynside\SiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Countrynside\SiteBundle\Entity\Util;

class EventType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('titre', 'text');
        $builder->add('type', 'choice', array('required' => true, 'empty_value' => 'Choisissez un type d\'évènement',
            'choices' => Util::getType()));
        $builder->add('capacite', 'choice', array('label' => 'Capacité', 'required' => true, 'empty_value' => 'Sélectionnez votre capacité d\'accueil',
            'choices' => Util::getCapacite()));
        $builder->add('region', 'choice', array('read_only' => true, 'required' => true, 'empty_value' => 'Sélectionnez votre région',
            'choices' => Util::getRegion()));
        $builder->add('adresse', 'text', array('required' => true));
        $builder->add('telephone', 'text', array('label' => 'Téléphone', 'max_length' => 10));
        $builder->add('tarif', 'integer', array('required' => true));
        $builder->add('file', 'file', array('label' => 'Photo de présentation',));
        $builder->add('descriptif', 'textarea');
        $builder->add('datepub', 'date', array('label' => false, 'attr' => array('style' => 'display:none;')));
        $builder->add('coord', 'hidden');
    }

    public function getName() {
        return 'event';
    }

//put your code here
}
