<?php

namespace Countrynside\CalendarBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Countrynside\CalendarBundle\Entity\Item;
use Countrynside\CalendarBundle\Form\ItemType;

/**
 * Item controller.
 *
 */
class ItemController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CountrynsideCalendarBundle:Item')->findAll();

        return $this->render('CountrynsideCalendarBundle:Item:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:Item')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Item entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CountrynsideCalendarBundle:Item:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    public function newAction()
    {
        $entity = new Item();
        $form = $this->createForm(new ItemType(), $entity);

        return $this->render('CountrynsideCalendarBundle:Item:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request)
    {
        $entity = new Item();
        $form = $this->createForm(new ItemType(), $entity);
        $form->bind($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('item_show', array('id' => $entity->getId())));
        }

        return $this->render('CountrynsideCalendarBundle:Item:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:Item')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Item entity.');
        }

        $editForm = $this->createForm(new ItemType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CountrynsideCalendarBundle:Item:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CountrynsideCalendarBundle:Item')->find($id);

        if (!$entity)
        {
            throw $this->createNotFoundException('Unable to find Item entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ItemType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid())
        {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('item_edit', array('id' => $id)));
        }

        return $this->render('CountrynsideCalendarBundle:Item:edit.html.twig', array(
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
            $entity = $em->getRepository('CountrynsideCalendarBundle:Item')->find($id);

            if (!$entity)
            {
                throw $this->createNotFoundException('Unable to find Item entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('item'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
