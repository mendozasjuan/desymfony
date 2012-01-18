<?php

/* DesymfonyBundle:Ponente:index.html.twig */
class __TwigTemplate_1cbec69761476995825d1229ec482a57 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            '__internal_1cbec69761476995825d1229ec482a57_1' => array($this, 'block___internal_1cbec69761476995825d1229ec482a57_1'),
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
        echo "Ponentes";
    }

    // line 4
    public function block___internal_1cbec69761476995825d1229ec482a57_1($context, array $blocks = array())
    {
        // line 5
        echo "  En esta edición contaremos con:
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'ponentes'));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['ponente']) {
            // line 7
            echo "
      ";
            // line 8
            if (((!$this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false)) && (!$this->getAttribute($this->getContext($context, 'loop'), "first", array(), "any", false)))) {
                echo ", 
      ";
            } elseif ($this->getAttribute($this->getContext($context, 'loop'), "last", array(), "any", false)) {
                // line 9
                echo "y 
      ";
            }
            // line 11
            echo "
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponente'), "nombreCompleto", array(), "any", false), "html");
            echo "

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponente'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo ".
";
    }

    // line 4
    public function block_metadesc($context, array $blocks = array())
    {
        echo $this->env->getExtension('desymfony_twig_extension')->format_metadesc((string) $this->renderBlock("__internal_1cbec69761476995825d1229ec482a57_1", $context, $blocks));
    }

    // line 16
    public function block_pageid($context, array $blocks = array())
    {
        echo "ponentes";
    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        // line 19
        echo "
    <h1>Ponentes</h1>

    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'ponentes'));
        foreach ($context['_seq'] as $context['_key'] => $context['ponente']) {
            // line 23
            echo "        <div class=\"grid_9 alpha\">

            <h2>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponente'), "nombreCompleto", array(), "any", false), "html");
            echo "</h2>
            <p>";
            // line 26
            echo $this->env->getExtension('desymfony_twig_extension')->auto_link_text($this->getAttribute($this->getContext($context, 'ponente'), "biografia", array(), "any", false));
            echo "</p>

            <p><strong>Imparte las siguientes ponencias</strong></p>
            <ul>

            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'ponente'), "ponencias", array(), "any", false));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context['_key'] => $context['ponencia']) {
                // line 32
                echo "            <li>
                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencia", array("slug" => $this->getAttribute($this->getContext($context, 'ponencia'), "slug", array(), "any", false))), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponencia'), "titulo", array(), "any", false), "html");
                echo "</a>
            </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "            <li>
                <p>No imparte ninguna ponencia</p>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponencia'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "        </ul>
    </div>

    <div class=\"grid_3 omega\">
        <p><strong>Más información</strong></p>

        <ul>
            ";
            // line 47
            if ($this->getAttribute($this->getContext($context, 'ponente'), "twitter", array(), "any", false)) {
                // line 48
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponente'), "twitter", array(), "any", false), "html");
                echo "\">Twitter</a></li>
            ";
            }
            // line 50
            echo "
            ";
            // line 51
            if ($this->getAttribute($this->getContext($context, 'ponente'), "linkedin", array(), "any", false)) {
                // line 52
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponente'), "linkedin", array(), "any", false), "html");
                echo "\">Linkedin</a></li>
            ";
            }
            // line 54
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponente'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 59
    public function block_lateral($context, array $blocks = array())
    {
        // line 60
        echo "<h3>¿Quieres ser ponente en las Jornadas Symfony 2011?</h3>
<p>Accede a las <a href=\"#\">sección de Call for Papers</a> y envía tu propuesta.</p>

";
        // line 63
        echo $this->renderParentBlock("lateral", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
