<?php

namespace Container7sj2J6e;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FqPY_CGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fqPY.CG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fqPY.CG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EventController::delete' => ['privates', '.service_locator.ABOx9AF', 'get_ServiceLocator_ABOx9AFService', true],
            'App\\Controller\\EventController::edit' => ['privates', '.service_locator.ABOx9AF', 'get_ServiceLocator_ABOx9AFService', true],
            'App\\Controller\\EventController::index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventController::join' => ['privates', '.service_locator.uLE7dpZ', 'get_ServiceLocator_ULE7dpZService', true],
            'App\\Controller\\EventController::new' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventController::show' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\EventUserController::index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventUserController::show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController::default' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController::noUserShowEvent' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\HomepageController::noUserindex' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController::userShowEvent' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::demoteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::promoteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EventController:delete' => ['privates', '.service_locator.ABOx9AF', 'get_ServiceLocator_ABOx9AFService', true],
            'App\\Controller\\EventController:edit' => ['privates', '.service_locator.ABOx9AF', 'get_ServiceLocator_ABOx9AFService', true],
            'App\\Controller\\EventController:index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventController:join' => ['privates', '.service_locator.uLE7dpZ', 'get_ServiceLocator_ULE7dpZService', true],
            'App\\Controller\\EventController:new' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventController:show' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\EventUserController:index' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\EventUserController:show' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController:default' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController:noUserShowEvent' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\HomepageController:noUserindex' => ['privates', '.service_locator.qE8Flyf', 'get_ServiceLocator_QE8FlyfService', true],
            'App\\Controller\\HomepageController:userShowEvent' => ['privates', '.service_locator.Y2F5Zqo', 'get_ServiceLocator_Y2F5ZqoService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:demoteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:promoteUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EventController::delete' => '?',
            'App\\Controller\\EventController::edit' => '?',
            'App\\Controller\\EventController::index' => '?',
            'App\\Controller\\EventController::join' => '?',
            'App\\Controller\\EventController::new' => '?',
            'App\\Controller\\EventController::show' => '?',
            'App\\Controller\\EventUserController::index' => '?',
            'App\\Controller\\EventUserController::show' => '?',
            'App\\Controller\\HomepageController::default' => '?',
            'App\\Controller\\HomepageController::noUserShowEvent' => '?',
            'App\\Controller\\HomepageController::noUserindex' => '?',
            'App\\Controller\\HomepageController::userShowEvent' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::demoteUser' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::promoteUser' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EventController:delete' => '?',
            'App\\Controller\\EventController:edit' => '?',
            'App\\Controller\\EventController:index' => '?',
            'App\\Controller\\EventController:join' => '?',
            'App\\Controller\\EventController:new' => '?',
            'App\\Controller\\EventController:show' => '?',
            'App\\Controller\\EventUserController:index' => '?',
            'App\\Controller\\EventUserController:show' => '?',
            'App\\Controller\\HomepageController:default' => '?',
            'App\\Controller\\HomepageController:noUserShowEvent' => '?',
            'App\\Controller\\HomepageController:noUserindex' => '?',
            'App\\Controller\\HomepageController:userShowEvent' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:demoteUser' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:promoteUser' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}