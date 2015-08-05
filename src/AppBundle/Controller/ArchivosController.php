<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Archivos;
use AppBundle\Form\ArchivosType;

/**
 * Archivos controller.
 *
 */
class ArchivosController extends Controller
{

    /**
     * Lists all Archivos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Archivos')->findAll();

        return $this->render('AppBundle:Archivos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Archivos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Archivos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archivos_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:Archivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Archivos entity.
     *
     * @param Archivos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Archivos $entity)
    {
        $form = $this->createForm(new ArchivosType(), $entity, array(
            'action' => $this->generateUrl('archivos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Archivos entity.
     *
     */
    public function newAction()
    {
        $entity = new Archivos();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Archivos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Archivos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Archivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Archivos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Archivos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Archivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archivos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Archivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Archivos entity.
    *
    * @param Archivos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Archivos $entity)
    {
        $form = $this->createForm(new ArchivosType(), $entity, array(
            'action' => $this->generateUrl('archivos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Archivos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Archivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('archivos_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:Archivos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Archivos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Archivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Archivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('archivos'));
    }

    /**
     * Creates a form to delete a Archivos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archivos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
