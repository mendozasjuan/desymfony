<?php

/* DesymfonyBundle:Usuario:registro.html.twig */
class __TwigTemplate_5617b5802052223edb6b979c86ee7b80 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metadesc' => array($this, 'block_metadesc'),
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
        echo "Registro";
    }

    // line 4
    public function block_metadesc($context, array $blocks = array())
    {
        echo "Regístrate y participa en DeSymfony";
    }

    // line 5
    public function block_pageid($context, array $blocks = array())
    {
        echo "registro";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>Registro</h1>

";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 12
            echo "<div class=\"notice\">
    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "</p>
</div>
";
        }
        // line 16
        echo "
";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "

<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">

    ";
        // line 21
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "nombre", array(), "any", false));
        echo "
    <p>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "nombre", array(), "any", false));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "nombre", array(), "any", false));
        echo "
    </p>

    ";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "apellidos", array(), "any", false));
        echo "
    <p>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "apellidos", array(), "any", false));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "apellidos", array(), "any", false));
        echo "
    </p>

    ";
        // line 33
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "email", array(), "any", false));
        echo "
    <p>
        ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "email", array(), "any", false));
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "email", array(), "any", false));
        echo "
    </p>

    <div class=\"grid_6 alpha\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "dni", array(), "any", false));
        echo "
        <p>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "dni", array(), "any", false));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "dni", array(), "any", false));
        echo "
        </p>
    </div>
    
    <div class=\"grid_6 omega\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "telefono", array(), "any", false));
        echo "
        <p>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "telefono", array(), "any", false));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "telefono", array(), "any", false));
        echo "
        </p>
    </div>

    ";
        // line 55
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "direccion", array(), "any", false));
        echo "
    <p>
        ";
        // line 57
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form'), "direccion", array(), "any", false));
        echo "
        ";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "direccion", array(), "any", false));
        echo "
    </p>
    
    <div class=\"grid_6 alpha\">
        ";
        // line 62
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "first", array(), "any", false));
        echo "
        <p>
            ";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "first", array(), "any", false), "Contraseña");
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "first", array(), "any", false));
        echo "
        </p>
    </div>
    
    <div class=\"grid_6 omega\">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "second", array(), "any", false));
        echo "
        <p>
            ";
        // line 72
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "second", array(), "any", false), "Repetir contraseña");
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'form'), "password", array(), "any", false), "second", array(), "any", false));
        echo "
        </p>
    </div>
    ";
        // line 76
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "_token", array(), "any", false));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "_token", array(), "any", false));
        echo "

    <input type=\"submit\" value=\"Regístrate\" />
</form>
";
    }

    // line 83
    public function block_lateral($context, array $blocks = array())
    {
        // line 84
        echo "<div class=\"usuario\">
<p>¿Ya estás registrado? <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html");
        echo "\">Haz login</a></p>
</div>

<h3>Ventajas de asistir a las jornadas</h3>
<ul>
    <li>Lorem ipsum et dolor</li>
    <li>Lorem ipsum et dolor</li>
    <li>Lorem ipsum et dolor</li>
</ul>

<h3>Preguntas frecuentes</h3>
<ul>
    <li>Lorem ipsum et dolor</li>
    <li>Lorem ipsum et dolor</li>
    <li>Lorem ipsum et dolor</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Usuario:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
