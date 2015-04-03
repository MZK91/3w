<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CmsController extends Controller
{
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Cms:list.html.twig');
    }
    public function viewAction($id)
    {
        return $this->render('StoreBackendBundle:Cms:view.html.twig',array('id'=>$id));
    }
}
