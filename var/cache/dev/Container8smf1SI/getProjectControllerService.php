<?php

namespace Container8smf1SI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProjectController' shared autowired service.
     *
     * @return \App\Controller\ProjectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProjectController.php';

        $container->services['App\\Controller\\ProjectController'] = $instance = new \App\Controller\ProjectController(($container->privates['App\\Repository\\ProjectRepository'] ?? $container->load('getProjectRepositoryService')), ($container->privates['App\\Repository\\StainsRepository'] ?? $container->load('getStainsRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProjectController', $container));

        return $instance;
    }
}
