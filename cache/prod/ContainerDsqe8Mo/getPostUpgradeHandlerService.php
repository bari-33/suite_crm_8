<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostUpgradeHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\LegacyHandler\Upgrade\PostUpgradeHandler' shared autowired service.
     *
     * @return \App\Install\LegacyHandler\Upgrade\PostUpgradeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'PostUpgradeHandler.php';

        return $container->privates['App\\Install\\LegacyHandler\\Upgrade\\PostUpgradeHandler'] = new \App\Install\LegacyHandler\Upgrade\PostUpgradeHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()));
    }
}
