<?php

/* DesymfonyBundle::layout.html.twig */
class __TwigTemplate_f25fb9bdaae7f1bde33e84808b5bf298 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'contenido' => array($this, 'block_contenido'),
            'lateral' => array($this, 'block_lateral'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "  <h1 class=\"grid_6\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html");
        echo "\">Jornadas Symfony 2011</a></h1>

  <nav class=\"grid_10\">
  <ul>
    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponencias"), "html");
        echo "\">Ponencias</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ponentes"), "html");
        echo "\">Ponentes</a></li>

    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_portada"), "html");
            echo "\">Admin</a></li>
    ";
        } else {
            // line 14
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) ? ($this->env->getExtension('routing')->getPath("perfil")) : ($this->env->getExtension('routing')->getPath("registro"))), "html");
            echo "\">
      ";
            // line 15
            echo (($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) ? ("Mi perfil") : ("Regístrate"));
            echo "
    </a></li>
    ";
        }
        // line 18
        echo "
    <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "contacto")), "html");
        echo "\">Contacto</a></li>

    ";
        // line 21
        if ($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) {
            // line 22
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html");
            echo "\">Salir</a></li>
    ";
        }
        // line 24
        echo "  </ul>
  </nav>
";
    }

    // line 31
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 34
    public function block_lateral($context, array $blocks = array())
    {
        // line 35
        echo "          <div class=\"usuario\">
          ";
        // line 36
        if ($this->env->getExtension('security')->isGranted(array(0 => "ROLE_USER"))) {
            // line 37
            echo "          ";
            // line 38
            echo "              <h4><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("perfil"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "nombreCompleto", array(), "any", false), "html");
            echo "</a></h4>
              <p>Estás apuntado a <strong>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "numeroPonencias", array(), "any", false), "html");
            echo "</strong> ponencias</p>
          ";
        } elseif ($this->env->getExtension('security')->isGranted(array(0 => "ROLE_ADMIN"))) {
            // line 41
            echo "          ";
            // line 42
            echo "              <h4>Administrador</h4>
              <p>Estás logueado como <strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false), "html");
            echo "</strong></p>
          ";
        } else {
            // line 45
            echo "          ";
            // line 46
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html");
            echo "\" class=\"btn\">Regístrate</a>
              <p>¿Ya estás registrado? <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html");
            echo "\">Haz login</a></p>
          ";
        }
        // line 49
        echo "          </div>

          <p>Las Jornadas Symfony 2011 se celebran del <strong>1 al 3 de julio</strong> de 2011 en la Universidad Jaume I de  Castellón</p>
          <p>El aforo está limitado a las 175 primeras inscripciones recibidas</p>

          <h3>Ventajas de asistir</h3>
          <ul>
              <li>1 curso de 6 horas sobre Symfony2</li>
              <li>10 sesiones prácticas</li>
              <li>Varios talleres prácticos</li>
              <li>Mesas redondas</li>
              <li>Networking</li>
          </ul>
      ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "  <article id=\"contenido\">
    <section id=\"principal\" class=\"grid_12\">
      ";
        // line 31
        $this->displayBlock('contenido', $context, $blocks);
        // line 32
        echo "    </section>
    <section id=\"lateral\" class=\"grid_4\">
      ";
        // line 34
        $this->displayBlock('lateral', $context, $blocks);
        // line 63
        echo "    </section>
  </article>
";
    }

    public function getTemplateName()
    {
        return "DesymfonyBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
