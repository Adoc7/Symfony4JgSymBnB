<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.bNzTxEY' shared service.

return $this->privates['.service_locator.bNzTxEY'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('booking' => function (): \App\Entity\Booking {
    return ($this->privates['.errored..service_locator.bNzTxEY.App\Entity\Booking'] ?? $this->load('getBookingService.php'));
}));
