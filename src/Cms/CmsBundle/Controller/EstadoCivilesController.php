<?php

namespace Cms\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cms\CmsBundle\Entity\EstadoCiviles;
use Cms\CmsBundle\Form\EstadoCivilesType;

/**
 * EstadoCiviles controller.
 *
 */
class EstadoCivilesController extends Controller
{

    /**
     * Lists all EstadoCiviles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CmsBundle:EstadoCiviles')->findAll();

        return $this->render('CmsBundle:EstadoCiviles:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EstadoCiviles entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EstadoCiviles();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estadociviles_show', array('id' => $entity->getId())));
        }

        return $this->render('CmsBundle:EstadoCiviles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EstadoCiviles entity.
     *
     * @param EstadoCiviles $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EstadoCiviles $entity)
    {
        $form = $this->createForm(new EstadoCivilesType(), $entity, array(
            'action' => $this->generateUrl('estadociviles_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EstadoCiviles entity.
     *
     */
    public function newAction()
    {
        $entity = new EstadoCiviles();
        $form   = $this->createCreateForm($entity);

        return $this->render('CmsBundle:EstadoCiviles:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EstadoCiviles entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoCiviles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoCiviles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoCiviles:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EstadoCiviles entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoCiviles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoCiviles entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoCiviles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EstadoCiviles entity.
    *
    * @param EstadoCiviles $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EstadoCiviles $entity)
    {
        $form = $this->createForm(new EstadoCivilesType(), $entity, array(
            'action' => $this->generateUrl('estadociviles_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EstadoCiviles entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoCiviles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoCiviles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estadociviles_edit', array('id' => $id)));
        }

        return $this->render('CmsBundle:EstadoCiviles:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EstadoCiviles entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CmsBundle:EstadoCiviles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EstadoCiviles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estadociviles'));
    }

    /**
     * Creates a form to delete a EstadoCiviles entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadociviles_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
