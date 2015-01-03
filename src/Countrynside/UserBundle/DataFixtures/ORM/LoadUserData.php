<?php

namespace Countrynside\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Countrynside\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface, \Symfony\Component\DependencyInjection\ContainerAwareInterface {

    private $container;
    
    public function load(ObjectManager $manager) {
        $userManager = $this->container->get('fos_user.user_manager');
        $user=$userManager->createUser();
        $user->setUserName("fifi")
                ->setEmail("philippe.paulos@gmail.com")
                ->setNom("Paulos")
                ->setPrenom("Philippe");
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        $user->setPassword($encoder->encodePassword("azerty", $user->getSalt()));
        $user->setEnabled(true);
        $user->setRoles(array("ROLE_ADMIN"));
        $userManager->updateUser($user,true);
        $manager->persist($user);
        $manager->flush();
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
