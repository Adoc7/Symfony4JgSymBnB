<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.cache' shared service.

$this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

$instance->pushHandler(($this->privates['monolog.handler.null_internal'] ?? $this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler()));

return $instance;
