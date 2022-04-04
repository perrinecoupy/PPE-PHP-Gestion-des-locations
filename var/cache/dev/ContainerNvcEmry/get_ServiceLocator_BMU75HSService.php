<?php

namespace ContainerNvcEmry;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BMU75HSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BMU75HS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BMU75HS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'authorRepository' => ['privates', 'App\\Repository\\AuthorRepository', 'getAuthorRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'authorRepository' => 'App\\Repository\\AuthorRepository',
        ]);
    }
}
