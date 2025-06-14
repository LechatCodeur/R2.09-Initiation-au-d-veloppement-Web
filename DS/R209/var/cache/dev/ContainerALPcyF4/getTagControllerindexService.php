<?php

namespace ContainerALPcyF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rV8GXTA.App\Controller\TagController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rV8GXTA.App\\Controller\\TagController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'tagRepository' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'tagRepository' => 'App\\Repository\\TagRepository',
        ]))->withContext('App\\Controller\\TagController::index()', $container);
    }
}
