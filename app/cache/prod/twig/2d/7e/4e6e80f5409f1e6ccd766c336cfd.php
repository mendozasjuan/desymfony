<?php

/* DesymfonyBundle:Ponencia:bloquePequeno.html.twig */
class __TwigTemplate_2d7e4e6e80f5409f1e6ccd766c336cfd extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencia", array("slug" => $this->getAttribute($this->getContext($context, 'ponencia'), "slug", array(), "any", false))), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponencia'), "titulo", array(), "any", false), "html");
        echo "</a>
<p>";
        // line 2
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, 'ponencia'), "descripcion", array(), "any", false), 150, true), "html");
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponencia:bloquePequeno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
