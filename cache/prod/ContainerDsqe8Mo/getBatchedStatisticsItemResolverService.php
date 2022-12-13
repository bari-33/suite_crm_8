<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchedStatisticsItemResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Statistics\Resolver\BatchedStatisticsItemResolver' shared autowired service.
     *
     * @return \App\Statistics\Resolver\BatchedStatisticsItemResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GraphQl'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'QueryItemResolverInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'BatchedStatisticsItemResolver.php';

        return $container->privates['App\\Statistics\\Resolver\\BatchedStatisticsItemResolver'] = new \App\Statistics\Resolver\BatchedStatisticsItemResolver(($container->privates['App\\Statistics\\Service\\StatisticsManager'] ?? $container->load('getStatisticsManagerService')));
    }
}
