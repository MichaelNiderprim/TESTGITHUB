<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PayController extends Controller
{
    public function payAction()
    {
        return $this->render('UserBundle:Pay:pay.html.twig');
    }
}
