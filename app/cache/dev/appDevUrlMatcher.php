<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

                return array (  '_controller' => 'Countrynside\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Countrynside\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
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

        // countrynside_site_infosEventComplet
        if ($pathinfo === '/information_evennement') {
            return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::infosEventCompletAction',  '_route' => 'countrynside_site_infosEventComplet',);
        }

        // countrynside_site_abonnement
        if ($pathinfo === '/abonnement') {
            return array (  '_controller' => 'Countrynside\\SiteBundle\\Controller\\DefaultController::abonnementAction',  '_route' => 'countrynside_site_abonnement',);
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

        if (0 === strpos($pathinfo, '/abonnement')) {
            // countrynside_payment_abonnement_prepare
            if ($pathinfo === '/abonnement/prepare') {
                return array (  '_controller' => 'Countrynside\\PaymentBundle\\Controller\\PaymentController::prepareAction',  '_route' => 'countrynside_payment_abonnement_prepare',);
            }

            // countrynside_payment_done
            if ($pathinfo === '/abonnement/done') {
                return array (  '_controller' => 'Countrynside\\PaymentBundle\\Controller\\PaymentController::doneAction',  '_route' => 'countrynside_payment_done',);
            }

        }

        if (0 === strpos($pathinfo, '/payment')) {
            if (0 === strpos($pathinfo, '/payment/capture')) {
                // payum_capture_do_session
                if ($pathinfo === '/payment/capture/session-token') {
                    return array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction',  '_route' => 'payum_capture_do_session',);
                }

                // payum_capture_do
                if (preg_match('#^/payment/capture/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_capture_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction',));
                }

            }

            // payum_authorize_do
            if (0 === strpos($pathinfo, '/payment/authorize') && preg_match('#^/payment/authorize/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_authorize_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction',));
            }

            if (0 === strpos($pathinfo, '/payment/notify')) {
                // payum_notify_do_unsafe
                if (0 === strpos($pathinfo, '/payment/notify/unsafe') && preg_match('#^/payment/notify/unsafe/(?P<payment_name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do_unsafe')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction',));
                }

                // payum_notify_do
                if (preg_match('#^/payment/notify/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
