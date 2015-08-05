<?php

namespace Cms\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cms\CmsBundle\Entity\EstadoProductos;
use Cms\CmsBundle\Form\EstadoProductosType;

/**
 * EstadoProductos controller.
 *
 */
class EstadoProductosController extends Controller
{

    /**
     * Lists all EstadoProductos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CmsBundle:EstadoProductos')->findAll();

        return $this->render('CmsBundle:EstadoProductos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EstadoProductos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EstadoProductos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estadoproductos_show', array('id' => $entity->getId())));
        }

        return $this->render('CmsBundle:EstadoProductos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EstadoProductos entity.
     *
     * @param EstadoProductos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EstadoProductos $entity)
    {
        $form = $this->createForm(new EstadoProductosType(), $entity, array(
            'action' => $this->generateUrl('estadoproductos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EstadoProductos entity.
     *
     */
    public function newAction()
    {
        $entity = new EstadoProductos();
        $form   = $this->createCreateForm($entity);

        return $this->render('CmsBundle:EstadoProductos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EstadoProductos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoProductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoProductos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoProductos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EstadoProductos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoProductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoProductos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoProductos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EstadoProductos entity.
    *
    * @param EstadoProductos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EstadoProductos $entity)
    {
        $form = $this->createForm(new EstadoProductosType(), $entity, array(
            'action' => $this->generateUrl('estadoproductos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EstadoProductos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoProductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoProductos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estadoproductos_edit', array('id' => $id)));
        }

        return $this->render('CmsBundle:EstadoProductos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EstadoProductos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CmsBundle:EstadoProductos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EstadoProductos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estadoproductos'));
    }

    /**
     * Creates a form to delete a EstadoProductos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadoproductos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
