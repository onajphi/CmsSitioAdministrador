<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('estadopedidos', new Route('/', array(
    '_controller' => 'CmsBundle:EstadoPedidos:index',
)));

$collection->add('estadopedidos_show', new Route('/{id}/show', array(
    '_controller' => 'CmsBundle:EstadoPedidos:show',
)));

$collection->add('estadopedidos_new', new Route('/new', array(
    '_controller' => 'CmsBundle:EstadoPedidos:new',
)));

$collection->add('estadopedidos_create', new Route(
    '/create',
    array('_controller' => 'CmsBundle:EstadoPedidos:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('estadopedidos_edit', new Route('/{id}/edit', array(
    '_controller' => 'CmsBundle:EstadoPedidos:edit',
)));

$collection->add('estadopedidos_update', new Route(
    '/{id}/update',
    array('_controller' => 'CmsBundle:EstadoPedidos:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('estadopedidos_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'CmsBundle:EstadoPedidos:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
