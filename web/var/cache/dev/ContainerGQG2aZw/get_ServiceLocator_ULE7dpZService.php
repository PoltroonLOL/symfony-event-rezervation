<?php

namespace ContainerGQG2aZw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ULE7dpZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uLE7dpZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uLE7dpZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.uLE7dpZ.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.uLE7dpZ": it needs an instance of "App\\Entity\\Event" but this type has been excluded in "config/services.yaml".'],
            'objectManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'event' => 'App\\Entity\\Event',
            'objectManager' => '?',
        ]);
    }
}
