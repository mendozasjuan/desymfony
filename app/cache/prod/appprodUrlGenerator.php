<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'ponencias' => true,
       'ponencia' => true,
       'apuntarse' => true,
       'admin_ponencia_list' => true,
       'admin_ponencia_new' => true,
       'admin_ponencia_edit' => true,
       'admin_ponencia_delete' => true,
       'admin_ponencia_apuntados' => true,
       'ponentes' => true,
       'registro' => true,
       'perfil' => true,
       'login' => true,
       'login_check' => true,
       'logout' => true,
       'denegado' => true,
       'm_portada' => true,
       'm_admin_portada' => true,
       'm_estatica' => true,
       'm_ponencias' => true,
       'm_ponencia' => true,
       'm_ponentes' => true,
       'portada' => true,
       'admin_portada' => true,
       'estatica' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getponenciasRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::indexAction',  '_format' => 'html',), array (  '_format' => 'html|xml|ics',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'html|xml|ics',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/ponencias',  ),));
    }

    private function getponenciaRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::ponenciaAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/ponencia',  ),));
    }

    private function getapuntarseRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::apuntarseAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/me-apunto-a',  ),));
    }

    private function getadmin_ponencia_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/ponencia/list',  ),));
    }

    private function getadmin_ponencia_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/ponencia/new',  ),));
    }

    private function getadmin_ponencia_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/ponencia/edit',  ),));
    }

    private function getadmin_ponencia_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/ponencia/delete',  ),));
    }

    private function getadmin_ponencia_apuntadosRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/ponencia/show',  ),));
    }

    private function getponentesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ponentes',  ),));
    }

    private function getregistroRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::registroAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/registro',  ),));
    }

    private function getperfilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::perfilAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/perfil',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::logoffAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getdenegadoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::denegadoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/denegado',  ),));
    }

    private function getm_portadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::indexAction',  '_format' => 'mhtml',), array (), array (  0 =>   array (    0 => 'text',    1 => '/m',  ),));
    }

    private function getm_admin_portadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',  '_format' => 'mhtml',), array (), array (  0 =>   array (    0 => 'text',    1 => '/m/admin',  ),));
    }

    private function getm_estaticaRouteInfo()
    {
        return array(array (  0 => 'pagina',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::estaticaAction',  '_format' => 'mhtml',), array (  'pagina' => 'contacto|copyright|condiciones|privacidad',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'contacto|copyright|condiciones|privacidad',    3 => 'pagina',  ),  1 =>   array (    0 => 'text',    1 => '/m/sitio',  ),));
    }

    private function getm_ponenciasRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::indexAction',  '_format' => 'mhtml',), array (  '_format' => 'mhtml|html|xml|ics',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'mhtml|html|xml|ics',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/m/ponencias',  ),));
    }

    private function getm_ponenciaRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::ponenciaAction',  '_format' => 'mhtml',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/m/ponencia',  ),));
    }

    private function getm_ponentesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenteController::indexAction',  '_format' => 'mhtml',), array (), array (  0 =>   array (    0 => 'text',    1 => '/m/ponentes',  ),));
    }

    private function getportadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getadmin_portadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getestaticaRouteInfo()
    {
        return array(array (  0 => 'pagina',), array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::estaticaAction',), array (  'pagina' => 'contacto|copyright|condiciones|privacidad',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'contacto|copyright|condiciones|privacidad',    3 => 'pagina',  ),  1 =>   array (    0 => 'text',    1 => '/sitio',  ),));
    }
}
