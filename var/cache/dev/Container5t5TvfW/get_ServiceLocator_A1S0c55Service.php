<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.A1S0c55' shared service.

return $this->privates['.service_locator.A1S0c55'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('ad' => function (): \App\Entity\Ad {
    return ($this->privates['.errored..service_locator.A1S0c55.App\Entity\Ad'] ?? $this->load('getAdService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}));
