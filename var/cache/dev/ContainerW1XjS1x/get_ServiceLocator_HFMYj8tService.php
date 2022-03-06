<?php

namespace ContainerW1XjS1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HFMYj8tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hFMYj8t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hFMYj8t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorRepository' => ['privates', 'App\\Repository\\AuthorRepository', 'getAuthorRepositoryService', true],
        ], [
            'authorRepository' => 'App\\Repository\\AuthorRepository',
        ]);
    }
}
