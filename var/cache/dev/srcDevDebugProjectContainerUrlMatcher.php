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
                    '/ads' => array(array('_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'), null, null, null),
                    '/ads/new' => array(array('_route' => 'ads_create', '_controller' => 'App\\Controller\\AdController::create'), null, null, null),
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
                    .'|/ads/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:31)'
                            .'|delete(*:44)'
                        .')'
                        .'|(*:52)'
                    .')'
                    .'|/hello(?'
                        .'|/([^/]++)/age(?:/([^/]++))?(*:96)'
                        .'|(?:/([^/]++))?(*:117)'
                        .'|(?:/([^/]++)(?:/([^/]++))?)?(*:153)'
                    .')'
                    .'|/user/([^/]++)(*:176)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:215)'
                        .'|wdt/([^/]++)(*:235)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:281)'
                                .'|router(*:295)'
                                .'|exception(?'
                                    .'|(*:315)'
                                    .'|\\.css(*:328)'
                                .')'
                            .')'
                            .'|(*:338)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            31 => array(array('_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'), array('slug'), null, null),
                            44 => array(array('_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'), array('slug'), null, null),
                            52 => array(array('_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'), array('slug'), null, null),
                            96 => array(array('_route' => 'hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            117 => array(array('_route' => 'hello_prenom', 'prenom' => '', '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom'), null, null),
                            153 => array(array('_route' => 'app_home_hello', 'prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array('prenom', 'age'), null, null),
                            176 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'), array('slug'), null, null),
                            215 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            235 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            281 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            295 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            315 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            328 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            338 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (338 === $m) {
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
