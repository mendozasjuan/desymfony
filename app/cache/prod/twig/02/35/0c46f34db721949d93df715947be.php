<?php

/* DesymfonyBundle:Ponencia:bloqueGrande.html.twig */
class __TwigTemplate_02350c46f34db721949d93df715947be extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"grid_2 alpha\">
  ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'ponencia'), "hora", array(), "any", false), "H:i"), "html");
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'ponencia'), "horaFinalizacion", array(), "any", false), "H:i"), "html");
        echo "
  ";
        // line 3
        $this->env->loadTemplate("DesymfonyBundle:Ponencia:meApunto.html.twig")->display($context);
        // line 4
        echo "</div>
<div class=\"grid_10 omega\">
  <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencia", array("slug" => $this->getAttribute($this->getContext($context, 'ponencia'), "slug", array(), "any", false))), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'ponencia'), "titulo", array(), "any", false), "html");
        echo "</a>
  <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, 'ponencia'), "descripcion", array(), "any", false), 300, true), "html");
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponencia:bloqueGrande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
