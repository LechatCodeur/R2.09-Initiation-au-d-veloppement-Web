<?php

namespace ContainerALPcyF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEtatControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.egipcEH.App\Controller\EtatController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.egipcEH'] ?? $container->load('get_ServiceLocator_EgipcEHService'));

        if (isset($container->privates['.service_locator.egipcEH.App\\Controller\\EtatController::new()'])) {
            return $container->privates['.service_locator.egipcEH.App\\Controller\\EtatController::new()'];
        }

        return $container->privates['.service_locator.egipcEH.App\\Controller\\EtatController::new()'] = $a->withContext('App\\Controller\\EtatController::new()', $container);
    }
}
