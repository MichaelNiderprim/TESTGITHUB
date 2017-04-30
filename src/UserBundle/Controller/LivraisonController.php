<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivraisonController extends Controller
{
    public function livraisonAction()
    {
        return $this->render('UserBundle:Livraison:livraison.html.twig');
    }
}
