<?php

namespace Countrynside\CalendarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Countrynside\CalendarBundle\Entity\State;
use Countrynside\CalendarBundle\Form\StateType;

/**
 * State controller.
 *
 */
class StateController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CountrynsideCalendarBundle:State')->findAll();

        return $this->render('CountrynsideCalendarBundle:State:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:State')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find State entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CountrynsideCalendarBundle:State:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    public function newAction()
    {
        $entity = new State();
        $form = $this->createForm(new StateType(), $entity);

        return $this->render('CountrynsideCalendarBundle:State:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new State();
        $form = $this->createForm(new StateType(), $entity);
        $form->bind($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('state_show', array('id' => $entity->getId())));
        }

        return $this->render('CountrynsideCalendarBundle:State:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:State')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find State entity.');
        }

        $editForm = $this->createForm(new StateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CountrynsideCalendarBundle:State:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:State')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find State entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StateType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid())
        {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('state_edit', array('id' => $id)));
        }

        return $this->render('CountrynsideCalendarBundle:State:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CountrynsideCalendarBundle:State')->find($id);

            if (!$entity)
            {
                throw $this->createNotFoundException('Unable to find State entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('state'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
