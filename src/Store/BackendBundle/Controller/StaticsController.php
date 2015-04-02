<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticsController extends Controller
{
    /**
     * Page Contact
     */
    public function contactAction()
    {
        return $this->render('StoreBackendBundle:Statics:contact.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('StoreBackendBundle:Statics:about.html.twig');
    }
    public function termsAction()
    {
        return $this->render('StoreBackendBundle:Statics:terms.html.twig');
    }
    public function conceptAction()
    {
        return $this->render('StoreBackendBundle:Statics:concept.html.twig');
    }
}
