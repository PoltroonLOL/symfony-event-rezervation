<?php

namespace ContainerDchcMAV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\EventRepository' shared autowired service.
     *
     * @return \App\Repository\EventRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\EventRepository'] = new \App\Repository\EventRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
