<?php

/* StoreBackendBundle:Cms:view.html.twig */
class __TwigTemplate_2010f8cc32a67e2f924f6f65a7ac1657b2cfd7f2b6f53551ac8cbab0387719a6 extends Twig_Template
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
        return "StoreBackendBundle:Cms:view.html.twig";
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
