<?php

namespace ContainerNrtnD1i;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_91kLpXoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.91kLpXo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.91kLpXo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.91kLpXo.App\\Entity\\Event', NULL, 'Cannot autowire service ".service_locator.91kLpXo": it references class "App\\Entity\\Event" but no such service exists.'],
            'eventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
        ], [
            'event' => 'App\\Entity\\Event',
            'eventRepository' => 'App\\Repository\\EventRepository',
        ]);
    }
}
