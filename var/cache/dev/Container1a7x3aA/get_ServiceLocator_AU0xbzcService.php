<?php

namespace Container1a7x3aA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AU0xbzcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AU0xbzc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AU0xbzc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'mailer' => '?',
            'managerRegistry' => '?',
        ]);
    }
}
