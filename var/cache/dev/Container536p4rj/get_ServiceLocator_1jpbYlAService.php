<?php

namespace Container536p4rj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1jpbYlAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1jpbYlA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1jpbYlA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ArticleController::editArticle' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\Admin\\CategoryController::editCategory' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\AuthorController::article' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\AuthorController::author' => ['privates', '.service_locator.hFMYj8t', 'get_ServiceLocator_HFMYj8tService', true],
            'App\\Controller\\AuthorController::showAuthor' => ['privates', '.service_locator.BMU75HS', 'get_ServiceLocator_BMU75HSService', true],
            'App\\Controller\\DefaultController::locataires' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\DefaultController::mandataires' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\DefaultController::residence' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\LocataireController::editUser' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\MandataireController::editUser' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\ArticleController:editArticle' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\Admin\\CategoryController:editCategory' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\AuthorController:article' => ['privates', '.service_locator.ys8EL7c', 'get_ServiceLocator_Ys8EL7cService', true],
            'App\\Controller\\AuthorController:author' => ['privates', '.service_locator.hFMYj8t', 'get_ServiceLocator_HFMYj8tService', true],
            'App\\Controller\\AuthorController:showAuthor' => ['privates', '.service_locator.BMU75HS', 'get_ServiceLocator_BMU75HSService', true],
            'App\\Controller\\DefaultController:locataires' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\DefaultController:mandataires' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\DefaultController:residence' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\LocataireController:editUser' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\MandataireController:editUser' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\ArticleController::editArticle' => '?',
            'App\\Controller\\Admin\\CategoryController::editCategory' => '?',
            'App\\Controller\\AuthorController::article' => '?',
            'App\\Controller\\AuthorController::author' => '?',
            'App\\Controller\\AuthorController::showAuthor' => '?',
            'App\\Controller\\DefaultController::locataires' => '?',
            'App\\Controller\\DefaultController::mandataires' => '?',
            'App\\Controller\\DefaultController::residence' => '?',
            'App\\Controller\\LocataireController::editUser' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\MandataireController::editUser' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\ArticleController:editArticle' => '?',
            'App\\Controller\\Admin\\CategoryController:editCategory' => '?',
            'App\\Controller\\AuthorController:article' => '?',
            'App\\Controller\\AuthorController:author' => '?',
            'App\\Controller\\AuthorController:showAuthor' => '?',
            'App\\Controller\\DefaultController:locataires' => '?',
            'App\\Controller\\DefaultController:mandataires' => '?',
            'App\\Controller\\DefaultController:residence' => '?',
            'App\\Controller\\LocataireController:editUser' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\MandataireController:editUser' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
