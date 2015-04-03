<?php

/* ::base.html.twig */
class __TwigTemplate_55c5025fa40860d5eca699f7044e6315a262633153faca29e90d13394a546ab4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'classname' => array($this, 'block_classname'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>         <html class=\"ie8\"> <![endif]-->
<!--[if IE 9]>         <html class=\"ie9 gt-ie8\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"gt-ie8 gt-ie9 not-ie\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/stylesheets/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
    <body class=\"";
        // line 15
        $this->displayBlock('classname', $context, $blocks);
        echo "\">

        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
        <!-- Get jQuery from Google CDN -->
        <!--[if !IE]> -->
        <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
        <!-- <![endif]-->
        <!--[if lte IE 9]>
        <script type=\"text/javascript\"> window.jQuery || document.write('<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\">'+\"<\"+\"/script>\"); </script>
        <![endif]-->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/javascripts/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_classname($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  96 => 17,  91 => 15,  86 => 12,  80 => 8,  74 => 28,  72 => 27,  68 => 26,  58 => 18,  56 => 17,  51 => 15,  45 => 13,  43 => 12,  39 => 11,  33 => 8,  24 => 1,);
    }
}
