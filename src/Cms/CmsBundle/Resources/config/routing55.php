<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('cms_homepage', new Route('/hello/{name}', array(
    '_controller' => 'CmsBundle:Default:index',
)));



return $collection;
