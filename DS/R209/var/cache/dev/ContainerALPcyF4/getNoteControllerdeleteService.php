<?php

namespace ContainerALPcyF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoteControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OEyoXXN.App\Controller\NoteController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OEyoXXN.App\\Controller\\NoteController::delete()'] = ($container->privates['.service_locator.OEyoXXN'] ?? $container->load('get_ServiceLocator_OEyoXXNService'))->withContext('App\\Controller\\NoteController::delete()', $container);
    }
}
