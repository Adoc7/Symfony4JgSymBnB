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
                    '/admin' => array(array('_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'), null, null, null),
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
                            .'|ads(?'
                                .'|(?:/(\\d+))?(*:98)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:122)'
                                    .'|deete(*:135)'
                                .')'
                            .')'
                            .'|booking(?'
                                .'|s(?'
                                    .'|(?:/(\\d+))?(*:170)'
                                    .'|/([^/]++)/edit(*:192)'
                                .')'
                                .'|/([^/]++)/delete(*:217)'
                            .')'
                            .'|comments(?'
                                .'|(?:/(\\d+))?(*:248)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:273)'
                                    .'|delete(*:287)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/booking/([^/]++)(*:316)'
                    .'|/hello(?'
                        .'|/([^/]++)/age(?:/([^/]++))?(*:360)'
                        .'|(?:/([^/]++))?(*:382)'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:418)'
                    .')'
                    .'|/user/([^/]++)(*:441)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:480)'
                        .'|wdt/([^/]++)(*:500)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:546)'
                                .'|router(*:560)'
                                .'|exception(?'
                                    .'|(*:580)'
                                    .'|\\.css(*:593)'
                                .')'
                            .')'
                            .'|(*:603)'
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
                            98 => array(array('_route' => 'admin_ads_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminAdController::index'), array('page'), null, null),
                            122 => array(array('_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'), array('id'), null, null),
                            135 => array(array('_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'), array('id'), null, null),
                            170 => array(array('_route' => 'admin_booking_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminBookingController::index'), array('page'), null, null),
                            192 => array(array('_route' => 'admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'), array('id'), null, null),
                            217 => array(array('_route' => 'admin_booking_delete', '_controller' => 'App\\Controller\\AdminBookingController::delete'), array('id'), null, null),
                            248 => array(array('_route' => 'admin_comment_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'), array('page'), null, null),
                            273 => array(array('_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'), array('id'), null, null),
                            287 => array(array('_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'), array('id'), null, null),
                            316 => array(array('_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'), array('id'), null, null),
                            360 => array(array('_route' => 'hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            382 => array(array('_route' => 'hello_prenom', 'prenom' => '', '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom'), null, null),
                            418 => array(array('_route' => 'app_home_hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            441 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'), array('slug'), null, null),
                            480 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            500 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            546 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            560 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            580 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            593 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            603 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (603 === $m) {
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
