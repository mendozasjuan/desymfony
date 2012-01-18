<?php

/* ::base.html.twig */
class __TwigTemplate_9bc8023a910b542e83603efd52b75c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageid' => array($this, 'block_pageid'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | Desymfony.com</title>
  <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('metadesc', $context, $blocks);
        echo "\" />

  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/desymfony/css/reset.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/desymfony/css/960.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/desymfony/css/main.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
  <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
</head>
<body id=\"";
        // line 17
        $this->displayBlock('pageid', $context, $blocks);
        echo "\">
  <header>
    <div class=\"container_16\">
    ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "    </div>
  </header>
  
  <div class=\"container_16\">
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
    <footer>
      ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "    </footer>
  </div>
  ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Jornadas de Symfony";
    }

    // line 7
    public function block_metadesc($context, array $blocks = array())
    {
        echo "Symfony aterriza en España, ¿te lo vas a perder?. Las Jornadas de Symfony 2011 tendrán lugar en la Universitat Jaume I, en Castellón, los días 1,2 y 3 de Julio de 2011";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_pageid($context, array $blocks = array())
    {
        echo "";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "copyright")), "html");
        echo "\">&copy; ";
        echo twig_escape_filter($this->env, twig_date_format_filter("now", "Y"), "html");
        echo " - desymfony</a>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "privacidad")), "html");
        echo "\"> Privacidad</a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "condiciones")), "html");
        echo "\"> Condiciones de uso</a>
      ";
    }

    // line 35
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
}
