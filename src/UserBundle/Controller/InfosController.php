<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InfosController extends Controller
{
    public function infosAction()
    {
        return $this->render('UserBundle:Infos:infos.html.twig');
    }
}
