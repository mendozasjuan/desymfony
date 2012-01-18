<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // ponencias
        if (0 === strpos($pathinfo, '/ponencias') && preg_match('#^/ponencias(?:\\.(?P<_format>html|xml|ics))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::indexAction',  '_format' => 'html',)), array('_route' => 'ponencias'));
        }

        // ponencia
        if (0 === strpos($pathinfo, '/ponencia') && preg_match('#^/ponencia/(?P<slug>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::ponenciaAction',)), array('_route' => 'ponencia'));
        }

        // apuntarse
        if (0 === strpos($pathinfo, '/me-apunto-a') && preg_match('#^/me\\-apunto\\-a\\-(?P<slug>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::apuntarseAction',)), array('_route' => 'apuntarse'));
        }

        if (0 === strpos($pathinfo, '/admin/ponencia')) {
            // admin_ponencia_list
            if ($pathinfo === '/admin/ponencia/list') {
                return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',  '_route' => 'admin_ponencia_list',);
            }

            // admin_ponencia_new
            if ($pathinfo === '/admin/ponencia/new') {
                return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::newAction',  '_route' => 'admin_ponencia_new',);
            }

            // admin_ponencia_edit
            if (0 === strpos($pathinfo, '/admin/ponencia/edit') && preg_match('#^/admin/ponencia/edit/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::editAction',)), array('_route' => 'admin_ponencia_edit'));
            }

            // admin_ponencia_delete
            if (0 === strpos($pathinfo, '/admin/ponencia/delete') && preg_match('#^/admin/ponencia/delete/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::deleteAction',)), array('_route' => 'admin_ponencia_delete'));
            }

            // admin_ponencia_apuntados
            if (0 === strpos($pathinfo, '/admin/ponencia/show') && preg_match('#^/admin/ponencia/show/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::showAction',)), array('_route' => 'admin_ponencia_apuntados'));
            }

        }

        // ponentes
        if ($pathinfo === '/ponentes') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenteController::indexAction',  '_route' => 'ponentes',);
        }

        // registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::registroAction',  '_route' => 'registro',);
        }

        // perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::perfilAction',  '_route' => 'perfil',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::logoffAction',  '_route' => 'logout',);
        }

        // denegado
        if ($pathinfo === '/denegado') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\UsuarioController::denegadoAction',  '_route' => 'denegado',);
        }

        // m_portada
        if ($pathinfo === '/m') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::indexAction',  '_format' => 'mhtml',  '_route' => 'm_portada',);
        }

        // m_admin_portada
        if ($pathinfo === '/m/admin') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',  '_format' => 'mhtml',  '_route' => 'm_admin_portada',);
        }

        // m_estatica
        if (0 === strpos($pathinfo, '/m/sitio') && preg_match('#^/m/sitio/(?P<pagina>contacto|copyright|condiciones|privacidad)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::estaticaAction',  '_format' => 'mhtml',)), array('_route' => 'm_estatica'));
        }

        // m_ponencias
        if (0 === strpos($pathinfo, '/m/ponencias') && preg_match('#^/m/ponencias(?:\\.(?P<_format>mhtml|html|xml|ics))?$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::indexAction',  '_format' => 'mhtml',)), array('_route' => 'm_ponencias'));
        }

        // m_ponencia
        if (0 === strpos($pathinfo, '/m/ponencia') && preg_match('#^/m/ponencia/(?P<slug>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenciaController::ponenciaAction',  '_format' => 'mhtml',)), array('_route' => 'm_ponencia'));
        }

        // m_ponentes
        if ($pathinfo === '/m/ponentes') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\PonenteController::indexAction',  '_format' => 'mhtml',  '_route' => 'm_ponentes',);
        }

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portada',);
        }

        // admin_portada
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\AdminPonenciaController::listAction',  '_route' => 'admin_portada',);
        }

        // estatica
        if (0 === strpos($pathinfo, '/sitio') && preg_match('#^/sitio/(?P<pagina>contacto|copyright|condiciones|privacidad)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Desymfony\\DesymfonyBundle\\Controller\\DefaultController::estaticaAction',)), array('_route' => 'estatica'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
