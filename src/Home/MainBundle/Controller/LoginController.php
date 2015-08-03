<?php

namespace Home\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller {
    public function indexAction()
    {
        return $this->render('MainBundle:Login:index.html.twig');
    }
    
      public function loginAction()
    {
        return new Response("<script  type='text/javascript'>window.location='/home';</script>");
    }
}
