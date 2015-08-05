<?php

namespace Cms\CmsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cms\CmsBundle\Entity\EstadoPedidos;
use Cms\CmsBundle\Form\EstadoPedidosType;

/**
 * EstadoPedidos controller.
 *
 */
class EstadoPedidosController extends Controller
{

    /**
     * Lists all EstadoPedidos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CmsBundle:EstadoPedidos')->findAll();

        return $this->render('CmsBundle:EstadoPedidos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EstadoPedidos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EstadoPedidos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estadopedidos_show', array('id' => $entity->getId())));
        }

        return $this->render('CmsBundle:EstadoPedidos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EstadoPedidos entity.
     *
     * @param EstadoPedidos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EstadoPedidos $entity)
    {
        $form = $this->createForm(new EstadoPedidosType(), $entity, array(
            'action' => $this->generateUrl('estadopedidos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EstadoPedidos entity.
     *
     */
    public function newAction()
    {
        $entity = new EstadoPedidos();
        $form   = $this->createCreateForm($entity);

        return $this->render('CmsBundle:EstadoPedidos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EstadoPedidos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoPedidos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoPedidos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoPedidos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EstadoPedidos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoPedidos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoPedidos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CmsBundle:EstadoPedidos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EstadoPedidos entity.
    *
    * @param EstadoPedidos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EstadoPedidos $entity)
    {
        $form = $this->createForm(new EstadoPedidosType(), $entity, array(
            'action' => $this->generateUrl('estadopedidos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EstadoPedidos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CmsBundle:EstadoPedidos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstadoPedidos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estadopedidos_edit', array('id' => $id)));
        }

        return $this->render('CmsBundle:EstadoPedidos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EstadoPedidos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CmsBundle:EstadoPedidos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EstadoPedidos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estadopedidos'));
    }

    /**
     * Creates a form to delete a EstadoPedidos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadopedidos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
