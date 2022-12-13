<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Version_ProviderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'app.version.provider' shared service.
     *
     * @return \Shivas\VersioningBundle\Provider\VersionProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'ProviderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'VersionProvider.php';

        return $container->services['app.version.provider'] = new \Shivas\VersioningBundle\Provider\VersionProvider(\dirname(__DIR__, 3));
    }
}
