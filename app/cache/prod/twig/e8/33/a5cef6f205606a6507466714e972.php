<?php

/* DesymfonyBundle:Ponencia:index.html.twig */
class __TwigTemplate_e833a5cef6f205606a6507466714e972 extends Twig_Template
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
        echo "Ponencias";
    }

    // line 4
    public function block_metadesc($context, array $blocks = array())
    {
        echo "El primer día se impartirán las charlas: ";
        echo twig_escape_filter($this->env, twig_join_filter($this->getContext($context, 'ponenciasDiaUno'), ", "), "html");
        echo ". Las charlas para el segundo día serán: ";
        echo twig_escape_filter($this->env, twig_join_filter($this->getContext($context, 'ponenciasDiaDos'), ", "), "html");
        echo ".";
    }

    // line 5
    public function block_pageid($context, array $blocks = array())
    {
        echo "ponencias";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Ponencias</h1>

<h2>Primer día (1 de julio)</h2>

";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'ponenciasDiaUno'));
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
        foreach ($context['_seq'] as $context['_key'] => $context['ponencia']) {
            // line 13
            echo "  <div>
  ";
            // line 14
            $this->env->loadTemplate("DesymfonyBundle:Ponencia:bloqueGrande.html.twig")->display($context);
            // line 15
            echo "  </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponencia'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
<h2>Segundo día (2 de julio)</h2>

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'ponenciasDiaDos'));
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
        foreach ($context['_seq'] as $context['_key'] => $context['ponencia']) {
            // line 21
            echo "  <div>
  ";
            // line 22
            $this->env->loadTemplate("DesymfonyBundle:Ponencia:bloqueGrande.html.twig")->display($context);
            // line 23
            echo "  </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponencia'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "
<p>Ponencias en formatos
<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencias", array("_format" => "xml")), "html");
        echo "\">XML</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencias", array("_format" => "ics")), "html");
        echo "\">iCal</a> </p>
";
    }

    // line 30
    public function block_lateral($context, array $blocks = array())
    {
        // line 31
        echo "<h3>¿Echas en falta algún tema?</h3>
<p>Accede a la sección <a href=\"#\"><em>Call for papers</em></a> y envíanos tu propuesta</p>

";
        // line 34
        echo $this->renderParentBlock("lateral", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
