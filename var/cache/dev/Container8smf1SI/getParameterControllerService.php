<?php

namespace Container8smf1SI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParameterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ParameterController' shared autowired service.
     *
     * @return \App\Controller\ParameterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ParameterController.php';

        $container->services['App\\Controller\\ParameterController'] = $instance = new \App\Controller\ParameterController(($container->privates['App\\Repository\\StatusRepository'] ?? $container->load('getStatusRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ParameterController', $container));

        return $instance;
    }
}
