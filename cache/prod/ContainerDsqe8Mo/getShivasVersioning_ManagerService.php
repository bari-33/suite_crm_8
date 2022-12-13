<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShivasVersioning_ManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'shivas_versioning.manager' shared service.
     *
     * @return \Shivas\VersioningBundle\Service\VersionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'VersionManagerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'VersionManager.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'WriterInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'VersionWriter.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'FormatterInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Formatter'.\DIRECTORY_SEPARATOR.'GitDescribeFormatter.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'ProviderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'GitRepositoryProvider.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'RevisionProvider.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'InitialVersionProvider.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'shivas'.\DIRECTORY_SEPARATOR.'versioning-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'VersionProvider.php';

        $container->privates['shivas_versioning.manager'] = $instance = new \Shivas\VersioningBundle\Service\VersionManager(($container->privates['shivas_versioning.cache.version'] ?? $container->load('getShivasVersioning_Cache_VersionService')), new \Shivas\VersioningBundle\Writer\VersionWriter(\dirname(__DIR__, 3)), new \Shivas\VersioningBundle\Formatter\GitDescribeFormatter());

        $instance->addProvider(($container->services['app.version.provider'] ?? ($container->services['app.version.provider'] = new \Shivas\VersioningBundle\Provider\VersionProvider(\dirname(__DIR__, 3)))), 'version', 100);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\GitRepositoryProvider(\dirname(__DIR__, 3)), 'git', -25);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\RevisionProvider(\dirname(__DIR__, 3)), 'revision', -50);
        $instance->addProvider(new \Shivas\VersioningBundle\Provider\InitialVersionProvider(), 'init', -75);

        return $instance;
    }
}
