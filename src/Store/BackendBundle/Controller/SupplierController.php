<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SupplierController extends Controller
{
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Supplier:list.html.twig');
    }
    public function viewAction($id)
    {
        return $this->render('StoreBackendBundle:Supplier:view.html.twig',array('id'=>$id));
    }
}
