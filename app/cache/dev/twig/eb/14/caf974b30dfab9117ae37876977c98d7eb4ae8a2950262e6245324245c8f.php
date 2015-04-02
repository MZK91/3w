<?php

/* StoreBackendBundle:Category:view.html.twig */
class __TwigTemplate_eb14caf974b30dfab9117ae37876977c98d7eb4ae8a2950262e6245324245c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle:Category:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
