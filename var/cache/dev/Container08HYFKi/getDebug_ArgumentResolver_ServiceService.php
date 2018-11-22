<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\AccountController::login' => function () {
    return ($this->privates['.service_locator.xJ_gBvk'] ?? $this->load('get_ServiceLocator_XJGBvkService.php'));
}, 'App\\Controller\\AccountController::profile' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\AccountController::register' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
}, 'App\\Controller\\AccountController::updatePassword' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
}, 'App\\Controller\\AdController::create' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\AdController::delete' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\AdController::edit' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\AdController::index' => function () {
    return ($this->privates['.service_locator.m1RiI2J'] ?? $this->load('get_ServiceLocator_M1RiI2JService.php'));
}, 'App\\Controller\\AdController::show' => function () {
    return ($this->privates['.service_locator.fBcpXpI'] ?? $this->load('get_ServiceLocator_FBcpXpIService.php'));
}, 'App\\Controller\\BookingController::book' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\BookingController::show' => function () {
    return ($this->privates['.service_locator.bNzTxEY'] ?? $this->load('get_ServiceLocator_BNzTxEYService.php'));
}, 'App\\Controller\\UserController::index' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}, 'App\\Controller\\AccountController:login' => function () {
    return ($this->privates['.service_locator.xJ_gBvk'] ?? $this->load('get_ServiceLocator_XJGBvkService.php'));
}, 'App\\Controller\\AccountController:profile' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\AccountController:register' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
}, 'App\\Controller\\AccountController:updatePassword' => function () {
    return ($this->privates['.service_locator.t7BdSgs'] ?? $this->load('get_ServiceLocator_T7BdSgsService.php'));
}, 'App\\Controller\\AdController:create' => function () {
    return ($this->privates['.service_locator.OLaif_L'] ?? $this->load('get_ServiceLocator_OLaifLService.php'));
}, 'App\\Controller\\AdController:delete' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\AdController:edit' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\AdController:index' => function () {
    return ($this->privates['.service_locator.m1RiI2J'] ?? $this->load('get_ServiceLocator_M1RiI2JService.php'));
}, 'App\\Controller\\AdController:show' => function () {
    return ($this->privates['.service_locator.fBcpXpI'] ?? $this->load('get_ServiceLocator_FBcpXpIService.php'));
}, 'App\\Controller\\BookingController:book' => function () {
    return ($this->privates['.service_locator.A1S0c55'] ?? $this->load('get_ServiceLocator_A1S0c55Service.php'));
}, 'App\\Controller\\BookingController:show' => function () {
    return ($this->privates['.service_locator.bNzTxEY'] ?? $this->load('get_ServiceLocator_BNzTxEYService.php'));
}, 'App\\Controller\\UserController:index' => function () {
    return ($this->privates['.service_locator.iuuVGtK'] ?? $this->load('get_ServiceLocator_IuuVGtKService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
