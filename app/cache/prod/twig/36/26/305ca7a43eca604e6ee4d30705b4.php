<?php

/* DesymfonyBundle:Usuario:login.html.twig */
class __TwigTemplate_3626305ca7a43eca604e6ee4d30705b4 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageid' => array($this, 'block_pageid'),
            'contenido' => array($this, 'block_contenido'),
            'lateral' => array($this, 'block_lateral'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("DesymfonyBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 4
    public function block_pageid($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Accede a tu cuenta</h1>

";
        // line 9
        if ($this->getContext($context, 'error')) {
            // line 10
            echo "    <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html");
        echo "\" method=\"post\" id=\"login\">
    <div>
        <label for=\"username\">Email</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
    </div>

    <div>
        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>

    <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
</form>
";
    }

    // line 28
    public function block_lateral($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
