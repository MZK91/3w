<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Product:list.html.twig');
    }
    public function viewAction($id,$name)
    {
        return $this->render('StoreBackendBundle:Product:view.html.twig', array('id' => $id,'name' => $name));
    }
}
