<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app' shared service.

include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';

$this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('AEAASxKT9U', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->load('getMonolog_Logger_CacheService.php')));

return $instance;
