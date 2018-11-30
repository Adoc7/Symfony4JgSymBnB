<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/login' => array(array('_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'), null, null, null),
                    '/register' => array(array('_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'), null, null, null),
                    '/account/profile' => array(array('_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'), null, null, null),
                    '/account/password-update' => array(array('_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'), null, null, null),
                    '/account' => array(array('_route' => 'account_index', '_controller' => 'App\\Controller\\AccountController::myAccount'), null, null, null),
                    '/account/bookings' => array(array('_route' => 'account_bookings', '_controller' => 'App\\Controller\\AccountController::bookings'), null, null, null),
                    '/ads' => array(array('_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'), null, null, null),
                    '/ads/new' => array(array('_route' => 'ads_create', '_controller' => 'App\\Controller\\AdController::create'), null, null, null),
                    '/admin/login' => array(array('_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'), null, null, null),
                    '/admin/logout' => array(array('_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'), null, null, null),
                    '/admin/ads' => array(array('_route' => 'admin_ads_index', '_controller' => 'App\\Controller\\AdminAdController::index'), null, null, null),
                    '/admin/bookings' => array(array('_route' => 'admin_booking_index', '_controller' => 'App\\Controller\\AdminBookingController::index'), null, null, null),
                    '/admin/comments' => array(array('_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\AdminCommentController::index'), null, null, null),
                    '/hello' => array(array('_route' => 'hello_base', '_controller' => 'App\\Controller\\HomeController::hello'), null, null, null),
                    '/' => array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/ad(?'
                        .'|s/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:34)'
                                .'|delete(*:47)'
                                .'|book(*:58)'
                            .')'
                            .'|(*:66)'
                        .')'
                        .'|min/(?'
                            .'|ads/([^/]++)/(?'
                                .'|edit(*:101)'
                                .'|deete(*:114)'
                            .')'
                            .'|bookings/([^/]++)/edit(*:145)'
                            .'|comments/([^/]++)/(?'
                                .'|edit(*:178)'
                                .'|delete(*:192)'
                            .')'
                        .')'
                    .')'
                    .'|/booking/([^/]++)(*:220)'
                    .'|/hello(?'
                        .'|/([^/]++)/age(?:/([^/]++))?(*:264)'
                        .'|(?:/([^/]++))?(*:286)'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:322)'
                    .')'
                    .'|/user/([^/]++)(*:345)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:384)'
                        .'|wdt/([^/]++)(*:404)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:450)'
                                .'|router(*:464)'
                                .'|exception(?'
                                    .'|(*:484)'
                                    .'|\\.css(*:497)'
                                .')'
                            .')'
                            .'|(*:507)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            34 => array(array('_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'), array('slug'), null, null),
                            47 => array(array('_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'), array('slug'), null, null),
                            58 => array(array('_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'), array('slug'), null, null),
                            66 => array(array('_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'), array('slug'), null, null),
                            101 => array(array('_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'), array('id'), null, null),
                            114 => array(array('_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'), array('id'), null, null),
                            145 => array(array('_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'), array('id'), null, null),
                            178 => array(array('_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'), array('id'), null, null),
                            192 => array(array('_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'), array('id'), null, null),
                            220 => array(array('_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'), array('id'), null, null),
                            264 => array(array('_route' => 'hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            286 => array(array('_route' => 'hello_prenom', 'prenom' => '', '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom'), null, null),
                            322 => array(array('_route' => 'app_home_hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            345 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'), array('slug'), null, null),
                            384 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            404 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            450 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            464 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            484 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            497 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            507 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (507 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
