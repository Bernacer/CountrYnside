<?php

namespace Countrynside\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Payum\Core\Request\GetHumanStatus;
use Payum\Core\Bridge\Buzz\JsonResponse;

class PaymentController extends Controller {

    public function prepareAction(Request $request) {
        $data = array();
        if ($request->getMethod() == 'POST') {
            $paymentName = 'myPayment';

            $storage = $this->get('payum')->getStorage('Countrynside\PaymentBundle\Entity\Order');
            $offre = $this->getDoctrine()
                    ->getRepository('CountrynsidePaymentBundle:Offre')
                    ->findOneByPrix($request->get("abonnement"));
            $order = $storage->create();
            $order->setNumber(uniqid());
            $order->setCurrencyCode('EUR');
            $order->setTotalAmount($request->get("abonnement") * 100); //1 € = 100
            $order->setDescription($offre->getDescription());
            $order->setUser($this->getUser());
            $order->setOffre($offre);
            $storage->update($order);

            $captureToken = $this->get('payum.security.token_factory')->createCaptureToken(
                    $paymentName, $order, 'countrynside_payment_done' // the route to redirect after capture
            );
        } else {
            return $this->render('CountrynsideSiteBundle:Default:index.html.twig');
        }

        return $this->redirect($captureToken->getTargetUrl());
    }

    public function doneAction(Request $request) {
        $user = $this->getUser();
        $token = $this->get('payum.security.http_request_verifier')->verify($request);
        $payment = $this->get('payum')->getPayment($token->getPaymentName());
        
        $payment->execute($status = new GetHumanStatus($token));
        $order = $status->getFirstModel();
        $offre = $order->getOffre();
        $duree = $offre->getDuree();
        if ($user->isPremium()) {
            $date = \DateTime::createFromFormat('Y/m/d', $user->getDateExpiration()->format('Y/m/d'));
            $user->setDateExpiration($date->modify('+' . $duree . ' month'));
        } else {
            $user->setPremium(true);
            $date = new \DateTime();
            $date = $date->modify('+' . $duree . ' month');
            $user->setDateExpiration($date);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->render('CountrynsidePaymentBundle:Default:success.html.twig', array('user' => $user));
    }

}
