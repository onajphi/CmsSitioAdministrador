<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('archivos', new Route('/', array(
    '_controller' => 'CmsBundle:Archivos:index',
)));

$collection->add('archivos_show', new Route('/{id}/show', array(
    '_controller' => 'CmsBundle:Archivos:show',
)));

$collection->add('archivos_new', new Route('/new', array(
    '_controller' => 'CmsBundle:Archivos:new',
)));

$collection->add('archivos_create', new Route(
    '/create',
    array('_controller' => 'CmsBundle:Archivos:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('archivos_edit', new Route('/{id}/edit', array(
    '_controller' => 'CmsBundle:Archivos:edit',
)));

$collection->add('archivos_update', new Route(
    '/{id}/update',
    array('_controller' => 'CmsBundle:Archivos:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('archivos_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'CmsBundle:Archivos:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
