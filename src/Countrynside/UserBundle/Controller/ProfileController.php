<?php

namespace Countrynside\UserBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProfileController extends BaseController {

    function showAction() {
        $user = $this->getUser();
        /*if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }*/
        $this->testPremium($user);
        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
                    'user' => $user
        ));
    }

    public function testPremium(&$user) {
        $test = false;
        if ($user->isPremium()) {
            $time = new \DateTime("now");
            if ($time > $user->getDateExpiration()) {
                throw new \Exception("test");
                $user->setPremium(false);
                $user->setDateExpiration(null);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            } else {
                $test = true;
            }
        }
        return $test;
    }

}
