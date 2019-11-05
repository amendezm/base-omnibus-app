<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if ($pathinfo === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/ruta')) {
            // ruta_index
            if ($pathinfo === '/ruta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ruta_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RutaController::indexAction',  '_route' => 'ruta_index',);
            }
            not_ruta_index:

            if (0 === strpos($pathinfo, '/ruta/reporte')) {
                // ruta_reporte
                if ($pathinfo === '/ruta/reporte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ruta_reporte;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RutaController::reporteAction',  '_route' => 'ruta_reporte',);
                }
                not_ruta_reporte:

                // ruta_reporte_show
                if ($pathinfo === '/ruta/reporte/visualizar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ruta_reporte_show;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RutaController::showIncidencias_xRuta_reporteAction',  '_route' => 'ruta_reporte_show',);
                }
                not_ruta_reporte_show:

            }

            // ruta_show
            if (preg_match('#^/ruta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ruta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_show')), array (  '_controller' => 'AppBundle\\Controller\\RutaController::showAction',));
            }
            not_ruta_show:

            // ruta_new
            if ($pathinfo === '/ruta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ruta_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RutaController::newAction',  '_route' => 'ruta_new',);
            }
            not_ruta_new:

            // ruta_edit
            if (preg_match('#^/ruta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ruta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_edit')), array (  '_controller' => 'AppBundle\\Controller\\RutaController::editAction',));
            }
            not_ruta_edit:

            // ruta_delete
            if (preg_match('#^/ruta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_ruta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_delete')), array (  '_controller' => 'AppBundle\\Controller\\RutaController::deleteAction',));
            }
            not_ruta_delete:

        }

        if (0 === strpos($pathinfo, '/escogidaturno')) {
            // escogidaturno_index
            if ($pathinfo === '/escogidaturno') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escogidaturno_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EscogidaTurnoController::indexAction',  '_route' => 'escogidaturno_index',);
            }
            not_escogidaturno_index:

            // escogidaturno_show
            if (preg_match('#^/escogidaturno/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escogidaturno_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escogidaturno_show')), array (  '_controller' => 'AppBundle\\Controller\\EscogidaTurnoController::showAction',));
            }
            not_escogidaturno_show:

            // escogidaturno_new
            if ($pathinfo === '/escogidaturno/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_escogidaturno_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EscogidaTurnoController::newAction',  '_route' => 'escogidaturno_new',);
            }
            not_escogidaturno_new:

            // escogidaturno_edit
            if (preg_match('#^/escogidaturno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_escogidaturno_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escogidaturno_edit')), array (  '_controller' => 'AppBundle\\Controller\\EscogidaTurnoController::editAction',));
            }
            not_escogidaturno_edit:

            // escogidaturno_delete
            if (preg_match('#^/escogidaturno/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_escogidaturno_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escogidaturno_delete')), array (  '_controller' => 'AppBundle\\Controller\\EscogidaTurnoController::deleteAction',));
            }
            not_escogidaturno_delete:

        }

        if (0 === strpos($pathinfo, '/tipo_omnibus')) {
            // tipo_omnibus_index
            if ($pathinfo === '/tipo_omnibus') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_omnibus_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Tipo_omnibusController::indexAction',  '_route' => 'tipo_omnibus_index',);
            }
            not_tipo_omnibus_index:

            // tipo_omnibus_show
            if (preg_match('#^/tipo_omnibus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_omnibus_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_omnibus_show')), array (  '_controller' => 'AppBundle\\Controller\\Tipo_omnibusController::showAction',));
            }
            not_tipo_omnibus_show:

            // tipo_omnibus_new
            if ($pathinfo === '/tipo_omnibus/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_omnibus_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Tipo_omnibusController::newAction',  '_route' => 'tipo_omnibus_new',);
            }
            not_tipo_omnibus_new:

            // tipo_omnibus_edit
            if (preg_match('#^/tipo_omnibus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_omnibus_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_omnibus_edit')), array (  '_controller' => 'AppBundle\\Controller\\Tipo_omnibusController::editAction',));
            }
            not_tipo_omnibus_edit:

            // tipo_omnibus_delete
            if (preg_match('#^/tipo_omnibus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_tipo_omnibus_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_omnibus_delete')), array (  '_controller' => 'AppBundle\\Controller\\Tipo_omnibusController::deleteAction',));
            }
            not_tipo_omnibus_delete:

        }

        if (0 === strpos($pathinfo, '/base')) {
            // base_index
            if ($pathinfo === '/base') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_base_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\baseController::indexAction',  '_route' => 'base_index',);
            }
            not_base_index:

            // base_show
            if (preg_match('#^/base/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_base_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'base_show')), array (  '_controller' => 'AppBundle\\Controller\\baseController::showAction',));
            }
            not_base_show:

            // base_new
            if ($pathinfo === '/base/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_base_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\baseController::newAction',  '_route' => 'base_new',);
            }
            not_base_new:

            // base_edit
            if (preg_match('#^/base/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_base_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'base_edit')), array (  '_controller' => 'AppBundle\\Controller\\baseController::editAction',));
            }
            not_base_edit:

            // base_delete
            if (preg_match('#^/base/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_base_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'base_delete')), array (  '_controller' => 'AppBundle\\Controller\\baseController::deleteAction',));
            }
            not_base_delete:

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tipoincidencia')) {
                // tipoincidencia_index
                if ($pathinfo === '/tipoincidencia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipoincidencia_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipoIncidenciaController::indexAction',  '_route' => 'tipoincidencia_index',);
                }
                not_tipoincidencia_index:

                // tipoincidencia_show
                if (preg_match('#^/tipoincidencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tipoincidencia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoincidencia_show')), array (  '_controller' => 'AppBundle\\Controller\\TipoIncidenciaController::showAction',));
                }
                not_tipoincidencia_show:

                // tipoincidencia_new
                if ($pathinfo === '/tipoincidencia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipoincidencia_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TipoIncidenciaController::newAction',  '_route' => 'tipoincidencia_new',);
                }
                not_tipoincidencia_new:

                // tipoincidencia_edit
                if (preg_match('#^/tipoincidencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tipoincidencia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoincidencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipoIncidenciaController::editAction',));
                }
                not_tipoincidencia_edit:

                // tipoincidencia_delete
                if (preg_match('#^/tipoincidencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_tipoincidencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoincidencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipoIncidenciaController::deleteAction',));
                }
                not_tipoincidencia_delete:

            }

            if (0 === strpos($pathinfo, '/tarjeta_combustible')) {
                // tarjeta_combustible_index
                if ($pathinfo === '/tarjeta_combustible') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarjeta_combustible_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::indexAction',  '_route' => 'tarjeta_combustible_index',);
                }
                not_tarjeta_combustible_index:

                // tarjeta_Reporte_mensual
                if ($pathinfo === '/tarjeta_combustible/reporte_mensual') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarjeta_Reporte_mensual;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::reporte_tarjeta_mensualAction',  '_route' => 'tarjeta_Reporte_mensual',);
                }
                not_tarjeta_Reporte_mensual:

                // tarjeta_combustible_show
                if (preg_match('#^/tarjeta_combustible/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tarjeta_combustible_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_combustible_show')), array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::showAction',));
                }
                not_tarjeta_combustible_show:

                // tarjeta_combustible_new
                if ($pathinfo === '/tarjeta_combustible/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tarjeta_combustible_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::newAction',  '_route' => 'tarjeta_combustible_new',);
                }
                not_tarjeta_combustible_new:

                // tarjeta_combustible_edit
                if (preg_match('#^/tarjeta_combustible/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tarjeta_combustible_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_combustible_edit')), array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::editAction',));
                }
                not_tarjeta_combustible_edit:

                // tarjeta_combustible_delete
                if (preg_match('#^/tarjeta_combustible/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_tarjeta_combustible_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_combustible_delete')), array (  '_controller' => 'AppBundle\\Controller\\Tarjeta_combustibleController::deleteAction',));
                }
                not_tarjeta_combustible_delete:

            }

        }

        if (0 === strpos($pathinfo, '/gps')) {
            // gps_index
            if ($pathinfo === '/gps') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gps_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GPSController::indexAction',  '_route' => 'gps_index',);
            }
            not_gps_index:

            // gps_show
            if (preg_match('#^/gps/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gps_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gps_show')), array (  '_controller' => 'AppBundle\\Controller\\GPSController::showAction',));
            }
            not_gps_show:

            // gps_new
            if ($pathinfo === '/gps/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gps_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GPSController::newAction',  '_route' => 'gps_new',);
            }
            not_gps_new:

            // gps_edit
            if (preg_match('#^/gps/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gps_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gps_edit')), array (  '_controller' => 'AppBundle\\Controller\\GPSController::editAction',));
            }
            not_gps_edit:

            // gps_delete
            if (preg_match('#^/gps/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_gps_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gps_delete')), array (  '_controller' => 'AppBundle\\Controller\\GPSController::deleteAction',));
            }
            not_gps_delete:

        }

        if (0 === strpos($pathinfo, '/pto_expedicion')) {
            // pto_expedicion_index
            if ($pathinfo === '/pto_expedicion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pto_expedicion_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Pto_expedicionController::indexAction',  '_route' => 'pto_expedicion_index',);
            }
            not_pto_expedicion_index:

            // pto_expedicion_show
            if (preg_match('#^/pto_expedicion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pto_expedicion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pto_expedicion_show')), array (  '_controller' => 'AppBundle\\Controller\\Pto_expedicionController::showAction',));
            }
            not_pto_expedicion_show:

            // pto_expedicion_new
            if ($pathinfo === '/pto_expedicion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pto_expedicion_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\Pto_expedicionController::newAction',  '_route' => 'pto_expedicion_new',);
            }
            not_pto_expedicion_new:

            // pto_expedicion_edit
            if (preg_match('#^/pto_expedicion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pto_expedicion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pto_expedicion_edit')), array (  '_controller' => 'AppBundle\\Controller\\Pto_expedicionController::editAction',));
            }
            not_pto_expedicion_edit:

            // pto_expedicion_delete
            if (preg_match('#^/pto_expedicion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_pto_expedicion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pto_expedicion_delete')), array (  '_controller' => 'AppBundle\\Controller\\Pto_expedicionController::deleteAction',));
            }
            not_pto_expedicion_delete:

        }

        if (0 === strpos($pathinfo, '/tipocombustible')) {
            // tipocombustible_index
            if ($pathinfo === '/tipocombustible') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocombustible_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipoCombustibleController::indexAction',  '_route' => 'tipocombustible_index',);
            }
            not_tipocombustible_index:

            // tipocombustible_show
            if (preg_match('#^/tipocombustible/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocombustible_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocombustible_show')), array (  '_controller' => 'AppBundle\\Controller\\TipoCombustibleController::showAction',));
            }
            not_tipocombustible_show:

            // tipocombustible_new
            if ($pathinfo === '/tipocombustible/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocombustible_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TipoCombustibleController::newAction',  '_route' => 'tipocombustible_new',);
            }
            not_tipocombustible_new:

            // tipocombustible_edit
            if (preg_match('#^/tipocombustible/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocombustible_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocombustible_edit')), array (  '_controller' => 'AppBundle\\Controller\\TipoCombustibleController::editAction',));
            }
            not_tipocombustible_edit:

            // tipocombustible_delete
            if (preg_match('#^/tipocombustible/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_tipocombustible_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocombustible_delete')), array (  '_controller' => 'AppBundle\\Controller\\TipoCombustibleController::deleteAction',));
            }
            not_tipocombustible_delete:

        }

        if (0 === strpos($pathinfo, '/omnibus')) {
            // omnibus_index
            if ($pathinfo === '/omnibus') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_omnibus_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::indexAction',  '_route' => 'omnibus_index',);
            }
            not_omnibus_index:

            // plan_combustible
            if ($pathinfo === '/omnibus/plan_combustible') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_plan_combustible;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::plan_combustibleAction',  '_route' => 'plan_combustible',);
            }
            not_plan_combustible:

            // combustibleHabilitado
            if ($pathinfo === '/omnibus/combustibleHabilitado') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_combustibleHabilitado;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::combustibleHabilitadoAction',  '_route' => 'combustibleHabilitado',);
            }
            not_combustibleHabilitado:

            // reporteporOmnibus
            if ($pathinfo === '/omnibus/reporteporOmnibus') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reporteporOmnibus;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::reporteporOmnibusAction',  '_route' => 'reporteporOmnibus',);
            }
            not_reporteporOmnibus:

            // omnibus_reporteKms
            if ($pathinfo === '/omnibus/kms') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_omnibus_reporteKms;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::KmsRecorridosAction',  '_route' => 'omnibus_reporteKms',);
            }
            not_omnibus_reporteKms:

            // omnibus_show
            if (preg_match('#^/omnibus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_omnibus_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'omnibus_show')), array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::showAction',));
            }
            not_omnibus_show:

            // omnibus_new
            if ($pathinfo === '/omnibus/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_omnibus_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::newAction',  '_route' => 'omnibus_new',);
            }
            not_omnibus_new:

            // omnibus_edit
            if (preg_match('#^/omnibus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_omnibus_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'omnibus_edit')), array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::editAction',));
            }
            not_omnibus_edit:

            // omnibus_delete
            if (preg_match('#^/omnibus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_omnibus_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'omnibus_delete')), array (  '_controller' => 'AppBundle\\Controller\\OmnibusController::deleteAction',));
            }
            not_omnibus_delete:

        }

        if (0 === strpos($pathinfo, '/incidencia')) {
            // incidencia_index
            if ($pathinfo === '/incidencia/index') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_incidencia_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IncidenciaController::indexAction',  '_route' => 'incidencia_index',);
            }
            not_incidencia_index:

            // incidencia_new
            if (preg_match('#^/incidencia/(?P<id_hojaruta>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_incidencia_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incidencia_new')), array (  '_controller' => 'AppBundle\\Controller\\IncidenciaController::newAction',));
            }
            not_incidencia_new:

            // incidencia_edit
            if (preg_match('#^/incidencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_incidencia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incidencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\IncidenciaController::editAction',));
            }
            not_incidencia_edit:

            // incidencia_delete
            if (preg_match('#^/incidencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_incidencia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incidencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\IncidenciaController::deleteAction',));
            }
            not_incidencia_delete:

        }

        if (0 === strpos($pathinfo, '/chofer')) {
            // chofer_index
            if ($pathinfo === '/chofer') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chofer_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ChoferController::indexAction',  '_route' => 'chofer_index',);
            }
            not_chofer_index:

            // chofer_reporte
            if ($pathinfo === '/chofer/reporte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chofer_reporte;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ChoferController::reporteHorasAction',  '_route' => 'chofer_reporte',);
            }
            not_chofer_reporte:

            // chofer_show
            if (preg_match('#^/chofer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chofer_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chofer_show')), array (  '_controller' => 'AppBundle\\Controller\\ChoferController::showAction',));
            }
            not_chofer_show:

            // chofer_new
            if ($pathinfo === '/chofer/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chofer_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ChoferController::newAction',  '_route' => 'chofer_new',);
            }
            not_chofer_new:

            // chofer_edit
            if (preg_match('#^/chofer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chofer_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chofer_edit')), array (  '_controller' => 'AppBundle\\Controller\\ChoferController::editAction',));
            }
            not_chofer_edit:

            // chofer_delete
            if (preg_match('#^/chofer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_chofer_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chofer_delete')), array (  '_controller' => 'AppBundle\\Controller\\ChoferController::deleteAction',));
            }
            not_chofer_delete:

        }

        if (0 === strpos($pathinfo, '/hojaruta')) {
            // hojaruta_index
            if ($pathinfo === '/hojaruta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hojaruta_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::indexAction',  '_route' => 'hojaruta_index',);
            }
            not_hojaruta_index:

            // reporte_hoja_ruta_fecha
            if ($pathinfo === '/hojaruta/fecha') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reporte_hoja_ruta_fecha;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::reporte_hoja_ruta_fechaAction',  '_route' => 'reporte_hoja_ruta_fecha',);
            }
            not_reporte_hoja_ruta_fecha:

            // hojaruta_show
            if (preg_match('#^/hojaruta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hojaruta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hojaruta_show')), array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::showAction',));
            }
            not_hojaruta_show:

            // hojaruta_new
            if ($pathinfo === '/hojaruta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hojaruta_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::newAction',  '_route' => 'hojaruta_new',);
            }
            not_hojaruta_new:

            // hojaruta_edit
            if (preg_match('#^/hojaruta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hojaruta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hojaruta_edit')), array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::editAction',));
            }
            not_hojaruta_edit:

            // hojaruta_delete
            if (preg_match('#^/hojaruta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_hojaruta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hojaruta_delete')), array (  '_controller' => 'AppBundle\\Controller\\HojaRutaController::deleteAction',));
            }
            not_hojaruta_delete:

        }

        if (0 === strpos($pathinfo, '/trabajador')) {
            // trabajador_index
            if ($pathinfo === '/trabajador') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_trabajador_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TrabajadorController::indexAction',  '_route' => 'trabajador_index',);
            }
            not_trabajador_index:

            // trabajador_show
            if (preg_match('#^/trabajador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_trabajador_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajador_show')), array (  '_controller' => 'AppBundle\\Controller\\TrabajadorController::showAction',));
            }
            not_trabajador_show:

            // trabajador_new
            if ($pathinfo === '/trabajador/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_trabajador_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TrabajadorController::newAction',  '_route' => 'trabajador_new',);
            }
            not_trabajador_new:

            // trabajador_edit
            if (preg_match('#^/trabajador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_trabajador_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajador_edit')), array (  '_controller' => 'AppBundle\\Controller\\TrabajadorController::editAction',));
            }
            not_trabajador_edit:

            // trabajador_delete
            if (preg_match('#^/trabajador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_trabajador_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trabajador_delete')), array (  '_controller' => 'AppBundle\\Controller\\TrabajadorController::deleteAction',));
            }
            not_trabajador_delete:

        }

        if (0 === strpos($pathinfo, '/recaudacion')) {
            // recaudacion_index
            if ($pathinfo === '/recaudacion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recaudacion_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::indexAction',  '_route' => 'recaudacion_index',);
            }
            not_recaudacion_index:

            // plan_recaudacion
            if ($pathinfo === '/recaudacion/plan_recaudacion') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_plan_recaudacion;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::plan_recaudacionAction',  '_route' => 'plan_recaudacion',);
            }
            not_plan_recaudacion:

            if (0 === strpos($pathinfo, '/recaudacion/re')) {
                // recaudacion_reporte
                if ($pathinfo === '/recaudacion/reporte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recaudacion_reporte;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::reporteAction',  '_route' => 'recaudacion_reporte',);
                }
                not_recaudacion_reporte:

                // recaudacion_recaudacionXfecha
                if ($pathinfo === '/recaudacion/recaudacionXfecha') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recaudacion_recaudacionXfecha;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::recaudacionAction',  '_route' => 'recaudacion_recaudacionXfecha',);
                }
                not_recaudacion_recaudacionXfecha:

            }

            // recaudacion_show
            if (preg_match('#^/recaudacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_recaudacion_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recaudacion_show')), array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::showAction',));
            }
            not_recaudacion_show:

            // recaudacion_new
            if ($pathinfo === '/recaudacion/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recaudacion_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::newAction',  '_route' => 'recaudacion_new',);
            }
            not_recaudacion_new:

            // recaudacion_edit
            if (preg_match('#^/recaudacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_recaudacion_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recaudacion_edit')), array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::editAction',));
            }
            not_recaudacion_edit:

            // recaudacion_delete
            if (preg_match('#^/recaudacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                    goto not_recaudacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'recaudacion_delete')), array (  '_controller' => 'AppBundle\\Controller\\RecaudacionController::deleteAction',));
            }
            not_recaudacion_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
