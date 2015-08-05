<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('estadoproductos', new Route('/', array(
    '_controller' => 'CmsBundle:EstadoProductos:index',
)));

$collection->add('estadoproductos_show', new Route('/{id}/show', array(
    '_controller' => 'CmsBundle:EstadoProductos:show',
)));

$collection->add('estadoproductos_new', new Route('/new', array(
    '_controller' => 'CmsBundle:EstadoProductos:new',
)));

$collection->add('estadoproductos_create', new Route(
    '/create',
    array('_controller' => 'CmsBundle:EstadoProductos:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('estadoproductos_edit', new Route('/{id}/edit', array(
    '_controller' => 'CmsBundle:EstadoProductos:edit',
)));

$collection->add('estadoproductos_update', new Route(
    '/{id}/update',
    array('_controller' => 'CmsBundle:EstadoProductos:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('estadoproductos_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'CmsBundle:EstadoProductos:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
