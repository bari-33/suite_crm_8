<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegacyPostUpgradeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Upgrade\Steps\LegacyPostUpgrade' autowired service.
     *
     * @return \App\Install\Service\Upgrade\Steps\LegacyPostUpgrade
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'UpgradeStepInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Engine'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Install'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Upgrade'.\DIRECTORY_SEPARATOR.'Steps'.\DIRECTORY_SEPARATOR.'LegacyPostUpgrade.php';

        $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\LegacyPostUpgrade'] = function () use ($container) {
            return new \App\Install\Service\Upgrade\Steps\LegacyPostUpgrade(($container->privates['App\\Install\\LegacyHandler\\Upgrade\\PostUpgradeHandler'] ?? $container->load('getPostUpgradeHandlerService')));
        };

        return $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\LegacyPostUpgrade']();
    }
}
