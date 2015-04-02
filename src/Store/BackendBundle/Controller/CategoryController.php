<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Category:list.html.twig');
    }
    public function viewAction($id)
    {
        return $this->render('StoreBackendBundle:Category:view.html.twig',array('id'=>$id));
    }
}
