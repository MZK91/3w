<?php

/* StoreBackendBundle::layout.html.twig */
class __TwigTemplate_a0c9ae907cc77041f932a1118930d09eecbaf6fb302cf087f5a41a6a7acaf70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'classname' => array($this, 'block_classname'),
            'body' => array($this, 'block_body'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_navigation' => array($this, 'block_menu_navigation'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backassets/stylesheets/pixel-admin.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backassets/stylesheets/widgets.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backassets/stylesheets/rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backassets/stylesheets/themes.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 9
    public function block_classname($context, array $blocks = array())
    {
        echo "theme-default main-menu-animated";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <script>var init = [];</script>
    <div id=\"main-wrapper\">
        ";
        // line 13
        $this->displayBlock('main_menu', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('menu_navigation', $context, $blocks);
        // line 15
        echo "        <div id=\"content-wrapper\">
            ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </div>
        <div id=\"main-menu-bg\"></div>
    </div>
";
    }

    // line 13
    public function block_main_menu($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "StoreBackendBundle:partial:main_menu.html.twig");
    }

    // line 14
    public function block_menu_navigation($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "StoreBackendBundle:partial:menu_navigation.html.twig");
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("backassets/javascripts/pixel-admin.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        init.push(function () {
            // Javascript code here
        })
        window.PixelAdmin.start(init);
    </script>
";
    }

    public function getTemplateName()
    {
        return "StoreBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  111 => 21,  106 => 16,  100 => 14,  94 => 13,  87 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  73 => 11,  70 => 10,  64 => 9,  58 => 7,  54 => 6,  50 => 5,  45 => 4,  42 => 3,  11 => 1,);
    }
}
