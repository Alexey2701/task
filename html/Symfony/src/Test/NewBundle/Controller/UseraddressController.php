<?php

namespace Test\NewBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Test\NewBundle\Entity\Useraddress;
use Test\NewBundle\Form\UseraddressType;

/**
 * Useraddress controller.
 *
 * @Route("/useraddress")
 */
class UseraddressController extends Controller
{

    /**
     * Lists all Useraddress entities.
     *
     * @Route("/", name="useraddress")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestNewBundle:Useraddress')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Useraddress entity.
     *
     * @Route("/", name="useraddress_create")
     * @Method("POST")
     * @Template("TestNewBundle:Useraddress:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Useraddress();
        $form = $this->createForm(new UseraddressType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('useraddress_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Useraddress entity.
     *
     * @Route("/new", name="useraddress_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Useraddress();
        $form   = $this->createForm(new UseraddressType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Useraddress entity.
     *
     * @Route("/{id}", name="useraddress_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestNewBundle:Useraddress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Useraddress entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Useraddress entity.
     *
     * @Route("/{id}/edit", name="useraddress_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestNewBundle:Useraddress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Useraddress entity.');
        }

        $editForm = $this->createForm(new UseraddressType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Useraddress entity.
     *
     * @Route("/{id}", name="useraddress_update")
     * @Method("PUT")
     * @Template("TestNewBundle:Useraddress:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestNewBundle:Useraddress')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Useraddress entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UseraddressType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('useraddress_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Useraddress entity.
     *
     * @Route("/{id}", name="useraddress_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestNewBundle:Useraddress')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Useraddress entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('useraddress'));
    }

    /**
     * Creates a form to delete a Useraddress entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
