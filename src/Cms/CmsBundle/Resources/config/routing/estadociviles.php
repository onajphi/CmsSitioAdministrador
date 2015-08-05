<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('estadociviles', new Route('/', array(
    '_controller' => 'CmsBundle:EstadoCiviles:index',
)));

$collection->add('estadociviles_show', new Route('/{id}/show', array(
    '_controller' => 'CmsBundle:EstadoCiviles:show',
)));

$collection->add('estadociviles_new', new Route('/new', array(
    '_controller' => 'CmsBundle:EstadoCiviles:new',
)));

$collection->add('estadociviles_create', new Route(
    '/create',
    array('_controller' => 'CmsBundle:EstadoCiviles:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('estadociviles_edit', new Route('/{id}/edit', array(
    '_controller' => 'CmsBundle:EstadoCiviles:edit',
)));

$collection->add('estadociviles_update', new Route(
    '/{id}/update',
    array('_controller' => 'CmsBundle:EstadoCiviles:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('estadociviles_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'CmsBundle:EstadoCiviles:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
