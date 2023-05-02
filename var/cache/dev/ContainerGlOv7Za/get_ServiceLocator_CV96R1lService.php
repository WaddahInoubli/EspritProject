<?php

namespace ContainerGlOv7Za;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CV96R1lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cV96R1l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cV96R1l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamationController::delete' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController::edit' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.6_W3Mkz', 'get_ServiceLocator_6W3MkzService', true],
            'App\\Controller\\ReclamationController::new' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController::search' => ['privates', '.service_locator._1lGmt_', 'get_ServiceLocator_1lGmtService', true],
            'App\\Controller\\ReclamationController::show' => ['privates', '.service_locator.Gu.Ouei', 'get_ServiceLocator_Gu_OueiService', true],
            'App\\Controller\\ReponseController::delete' => ['privates', '.service_locator.iCxW05E', 'get_ServiceLocator_ICxW05EService', true],
            'App\\Controller\\ReponseController::edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController::index' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController::new' => ['privates', '.service_locator.8P07JG1', 'get_ServiceLocator_8P07JG1Service', true],
            'App\\Controller\\ReponseController::show' => ['privates', '.service_locator.iD1oHHA', 'get_ServiceLocator_ID1oHHAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ReclamationController:delete' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController:edit' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.6_W3Mkz', 'get_ServiceLocator_6W3MkzService', true],
            'App\\Controller\\ReclamationController:new' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController:search' => ['privates', '.service_locator._1lGmt_', 'get_ServiceLocator_1lGmtService', true],
            'App\\Controller\\ReclamationController:show' => ['privates', '.service_locator.Gu.Ouei', 'get_ServiceLocator_Gu_OueiService', true],
            'App\\Controller\\ReponseController:delete' => ['privates', '.service_locator.iCxW05E', 'get_ServiceLocator_ICxW05EService', true],
            'App\\Controller\\ReponseController:edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController:index' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController:new' => ['privates', '.service_locator.8P07JG1', 'get_ServiceLocator_8P07JG1Service', true],
            'App\\Controller\\ReponseController:show' => ['privates', '.service_locator.iD1oHHA', 'get_ServiceLocator_ID1oHHAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ReclamationController::delete' => '?',
            'App\\Controller\\ReclamationController::edit' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::new' => '?',
            'App\\Controller\\ReclamationController::search' => '?',
            'App\\Controller\\ReclamationController::show' => '?',
            'App\\Controller\\ReponseController::delete' => '?',
            'App\\Controller\\ReponseController::edit' => '?',
            'App\\Controller\\ReponseController::index' => '?',
            'App\\Controller\\ReponseController::new' => '?',
            'App\\Controller\\ReponseController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ReclamationController:delete' => '?',
            'App\\Controller\\ReclamationController:edit' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:new' => '?',
            'App\\Controller\\ReclamationController:search' => '?',
            'App\\Controller\\ReclamationController:show' => '?',
            'App\\Controller\\ReponseController:delete' => '?',
            'App\\Controller\\ReponseController:edit' => '?',
            'App\\Controller\\ReponseController:index' => '?',
            'App\\Controller\\ReponseController:new' => '?',
            'App\\Controller\\ReponseController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
