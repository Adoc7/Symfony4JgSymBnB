<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcEnvDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'ads_index' => array(array(), array('_controller' => 'App\\Controller\\AdController::index'), array(), array(array('text', '/ads')), array(), array()),
        'ads_create' => array(array(), array('_controller' => 'App\\Controller\\AdController::create'), array(), array(array('text', '/ads/new')), array(), array()),
        'ads_edit' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'ads_show' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::show'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'ads_delete' => array(array('slug'), array('_controller' => 'App\\Controller\\AdController::delete'), array(), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'slug'), array('text', '/ads')), array(), array()),
        'hello' => array(array('prenom', 'age'), array('prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'age'), array('text', '/age'), array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'hello_base' => array(array(), array('_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('text', '/hello')), array(), array()),
        'hello_prenom' => array(array('prenom'), array('prenom' => '', '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'app_home_hello' => array(array('prenom', 'age'), array('prenom' => '', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'), array(), array(array('variable', '/', '[^/]++', 'age'), array('variable', '/', '[^/]++', 'prenom'), array('text', '/hello')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\HomeController::home'), array(), array(array('text', '/')), array(), array()),
        'user_show' => array(array('slug'), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('variable', '/', '[^/]++', 'slug'), array('text', '/user')), array(), array()),
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
