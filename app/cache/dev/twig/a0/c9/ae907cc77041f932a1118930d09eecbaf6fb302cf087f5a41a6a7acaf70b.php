<?php

/* StoreBackendBundle::layout.html.twig */
class __TwigTemplate_a0c9ae907cc77041f932a1118930d09eecbaf6fb302cf087f5a41a6a7acaf70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "LAYOUT
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  20 => 1,);
    }
}
