<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SigninController extends Controller
{
    public function signinAction()
    {
        return $this->render('UserBundle:Signin:signin.html.twig');
    }
}
