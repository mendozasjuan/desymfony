<?php

/* DesymfonyBundle:Ponencia:meApunto.html.twig */
class __TwigTemplate_8c9e76bc561d7f87501ab8e040ec41aa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "hasPonencia", array($this->getContext($context, 'ponencia'), ), "method", false)) {
                // line 3
                echo "        <strong class=\"apuntado\">&#10004; Apuntado</strong>
    ";
            } else {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apuntarse", array("slug" => $this->getAttribute($this->getContext($context, 'ponencia'), "slug", array(), "any", false))), "html");
                echo "\" class=\"btn me_apunto\">Me apunto</a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle:Ponencia:meApunto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
