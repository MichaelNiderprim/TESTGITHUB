<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddressController extends Controller
{
    public function addressAction()
    {
        return $this->render('UserBundle:Address:address.html.twig');
    }
}
