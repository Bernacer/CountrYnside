<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/inscription/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/inscription/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        // countrynside_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'countrynside_site_homepage');
            }

            return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'countrynside_site_homepage',);
        }

        // countrynside_site_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'countrynside_site_connexion',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // countrynside_site_annonce
            if ($pathinfo === '/user/annonce') {
                return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::annonceAction',  '_route' => 'countrynside_site_annonce',);
            }

            // countrynside_site_mes_annonces
            if ($pathinfo === '/user/mes_annonces') {
                return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::mesAnnoncesAction',  '_route' => 'countrynside_site_mes_annonces',);
            }

        }

        // countrynside_site_chercherEvent
        if ($pathinfo === '/rechercher_evennement') {
            return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::chercherEventAction',  '_route' => 'countrynside_site_chercherEvent',);
        }

        // countrynside_calendar_homepage
        if (0 === strpos($pathinfo, '/calendar') && preg_match('#^/calendar/(?P<event>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'countrynside_calendar_homepage')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\DefaultController::indexAction',));
        }

        // countrynside_calendar_ajax
        if ($pathinfo === '/ajax_calendar') {
            return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\DefaultController::calendarAction',  '_route' => 'countrynside_calendar_ajax',);
        }

        // countrynside_calendar_admin
        if (0 === strpos($pathinfo, '/user/calendar') && preg_match('#^/user/calendar/(?P<event>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'countrynside_calendar_admin')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\DefaultController::indexAdminAction',));
        }

        // countrynside_calendar_ajax_admin
        if ($pathinfo === '/ajax_admin') {
            return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\DefaultController::ajaxAdminAction',  '_route' => 'countrynside_calendar_ajax_admin',);
        }

        if (0 === strpos($pathinfo, '/user/calendar')) {
            if (0 === strpos($pathinfo, '/user/calendar/state')) {
                // state
                if (rtrim($pathinfo, '/') === '/user/calendar/state') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'state');
                    }

                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::indexAction',  '_route' => 'state',);
                }

                // state_show
                if (preg_match('#^/user/calendar/state/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_show')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::showAction',));
                }

                // state_new
                if ($pathinfo === '/user/calendar/state/new') {
                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::newAction',  '_route' => 'state_new',);
                }

                // state_create
                if ($pathinfo === '/user/calendar/state/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_state_create;
                    }

                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::createAction',  '_route' => 'state_create',);
                }
                not_state_create:

                // state_edit
                if (preg_match('#^/user/calendar/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_edit')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::editAction',));
                }

                // state_update
                if (preg_match('#^/user/calendar/state/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_state_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_update')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::updateAction',));
                }
                not_state_update:

                // state_delete
                if (preg_match('#^/user/calendar/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_state_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_delete')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\StateController::deleteAction',));
                }
                not_state_delete:

            }

            if (0 === strpos($pathinfo, '/user/calendar/item')) {
                // item
                if (rtrim($pathinfo, '/') === '/user/calendar/item') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'item');
                    }

                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::indexAction',  '_route' => 'item',);
                }

                // item_show
                if (preg_match('#^/user/calendar/item/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_show')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::showAction',));
                }

                // item_new
                if ($pathinfo === '/user/calendar/item/new') {
                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::newAction',  '_route' => 'item_new',);
                }

                // item_create
                if ($pathinfo === '/user/calendar/item/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_item_create;
                    }

                    return array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::createAction',  '_route' => 'item_create',);
                }
                not_item_create:

                // item_edit
                if (preg_match('#^/user/calendar/item/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_edit')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::editAction',));
                }

                // item_update
                if (preg_match('#^/user/calendar/item/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_item_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_update')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::updateAction',));
                }
                not_item_update:

                // item_delete
                if (preg_match('#^/user/calendar/item/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_item_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_delete')), array (  '_controller' => 'Countrynside\\CalendarBundle\\Controller\\ItemController::deleteAction',));
                }
                not_item_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
