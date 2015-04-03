<?php

/* StoreBackendBundle:partial:content.html.twig */
class __TwigTemplate_dfb6fecc365b8c9c964ca19704fd8711cdf2ee55733175abcbf45f9bbd07d9f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("StoreBackendBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'catbread' => array($this, 'block_catbread'),
            'activebread' => array($this, 'block_activebread'),
            'header' => array($this, 'block_header'),
            'contentwrap' => array($this, 'block_contentwrap'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StoreBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <ul class=\"breadcrumb breadcrumb-page\">
            <div class=\"breadcrumb-label text-light-gray\">You are here: </div>
            <li><a href=\"#\">";
        // line 5
        $this->displayBlock('catbread', $context, $blocks);
        echo "</a></li>
            <li class=\"active\"><a href=\"#\">";
        // line 6
        $this->displayBlock('activebread', $context, $blocks);
        echo "</a></li>
        </ul>
        <div class=\"page-header\">
            ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "        </div>
        ";
        // line 11
        $this->displayBlock('contentwrap', $context, $blocks);
    }

    // line 5
    public function block_catbread($context, array $blocks = array())
    {
    }

    // line 6
    public function block_activebread($context, array $blocks = array())
    {
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 11
    public function block_contentwrap($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:partial:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  76 => 9,  71 => 6,  66 => 5,  62 => 11,  59 => 10,  57 => 9,  51 => 6,  47 => 5,  43 => 3,  40 => 2,  11 => 1,);
    }
}
