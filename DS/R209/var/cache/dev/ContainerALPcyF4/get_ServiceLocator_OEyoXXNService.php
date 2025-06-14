<?php

namespace ContainerALPcyF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OEyoXXNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OEyoXXN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OEyoXXN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'note' => ['privates', '.errored..service_locator.OEyoXXN.App\\Entity\\Note', NULL, 'Cannot autowire service ".service_locator.OEyoXXN": it needs an instance of "App\\Entity\\Note" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'note' => 'App\\Entity\\Note',
            'entityManager' => '?',
        ]);
    }
}
