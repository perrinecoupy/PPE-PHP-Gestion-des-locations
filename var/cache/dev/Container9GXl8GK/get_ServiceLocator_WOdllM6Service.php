<?php

namespace Container9GXl8GK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WOdllM6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wOdllM6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wOdllM6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userPasswordHasherInterface' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'userPasswordHasherInterface' => '?',
        ]);
    }
}
