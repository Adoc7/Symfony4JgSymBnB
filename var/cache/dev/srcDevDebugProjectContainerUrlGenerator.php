<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'account_login' => array(array(), array('_controller' => 'App\\Controller\\AccountController::login'), array(), array(array('text', '/login')), array(), array()),
        'account_logout' => array(array(), array('_controller' => 'App\\Controller\\AccountController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'account_register' => array(array(), array('_controller' => 'App\\Controller\\AccountController::register'), array(), array(array('text', '/register')), array(), array()),
        'account_profile' => array(array(), array('_controller' => 'App\\Controller\\AccountController::profile'), array(), array(array('text', '/account/profile')), array(), array()),
        'account_password' => array(array(), array('_controller' => 'App\\Controller\\AccountController::updatePassword'), array(), array(array('text', '/account/password-update')), array(), array()),
        'account_index' => array(array(), array('_controller' => 'App\\Controller\\AccountController::myAccount'), array(), array(array('text', '/account')), array(), array()),
        'account_bookings' => array(array(), array('_controller' => 'App\\Controller\\AccountController::bookings'), array(), array(array('text', '/account/bookings')), array(), array()),
        'ads_index' => array(array(), array('_controller' => 'App\\Controller\\AdController::index'), array(), array(array('text', '/ads')), array(), array()),
        'ads_create' => array(array(), array('_controller' => 'App\\Controller\\AdController::create'), array(), array(array('text', '/ads/new')), array(), array()),
        'ads_edit' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'ads_show' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::show'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'ads_delete' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'admin_account_login' => array(array(), array('_controller' => 'App\\Controller\\AdminAccountController::login'), array(), array(array('text', '/admin/login')), array(), array()),
        'admin_account_logout' => array(array(), array('_controller' => 'App\\Controller\\AdminAccountController::logout'), array(), array(array('text', '/admin/logout')), array(), array()),
        'admin_ads_index' => array(array(), array('_controller' => 'App\\Controller\\AdminAdController::index'), array(), array(array('text', '/admin/ads')), array(), array()),
        'admin_ads_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AdminAdController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/ads')), array(), array()),
        'admin_ads_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminAdController::delete'), array(), array(array('text', '/deete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/ads')), array(), array()),
        'admin_booking_index' => array(array(), array('_controller' => 'App\\Controller\\AdminBookingController::index'), array(), array(array('text', '/admin/bookings')), array(), array()),
        'admin_booking_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AdminBookingController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/bookings')), array(), array()),
        'admin_comment_index' => array(array(), array('_controller' => 'App\\Controller\\AdminCommentController::index'), array(), array(array('text', '/admin/comments')), array(), array()),
        'admin_comment_edit' => array(array('id'), array('_controller' => 'App\\Controller\\AdminCommentController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/comments')), array(), array()),
        'admin_comment_delete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminCommentController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/admin/comments')), array(), array()),
        'booking_create' => array(array('slug'), array('_controller' => 'App\\Controller\\BookingController::book'), array(), array(array('text', '/book'), array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'booking_show' => array(array('id'), array('_controller' => 'App\\Controller\\BookingController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/booking')), array(), array()),
        'hello' => array(array('prenom', 'age'), array('prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'age'), array('text', '/age'), array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'hello_base' => array(array(), array('_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('text', '/hello')), array(), array()),
        'hello_prenom' => array(array('prenom'), array('prenom' => '', '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'app_home_hello' => array(array('prenom', 'age'), array('prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'age'), array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\HomeController::home'), array(), array(array('text', '/')), array(), array()),
        'user_show' => array(array('slug'), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/user')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
