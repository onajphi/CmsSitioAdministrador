<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('main_homepage', new Route('/', array(
    '_controller' => 'MainBundle:Login:index',
)));

$collection->add('login_homepage', new Route('/login', array(
    '_controller' => 'MainBundle:Login:login',
)));

$collection->add('home_homepage', new Route('/home', array(
    '_controller' => 'MainBundle:Default:index',
)));

return $collection;
