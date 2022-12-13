<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchedStatisticsItemDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Statistics\DataProvider\BatchedStatisticsItemDataProvider' shared autowired service.
     *
     * @return \App\Statistics\DataProvider\BatchedStatisticsItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Statistics'.\DIRECTORY_SEPARATOR.'DataProvider'.\DIRECTORY_SEPARATOR.'BatchedStatisticsItemDataProvider.php';

        return $container->privates['App\\Statistics\\DataProvider\\BatchedStatisticsItemDataProvider'] = new \App\Statistics\DataProvider\BatchedStatisticsItemDataProvider(($container->privates['App\\Statistics\\Service\\StatisticsManager'] ?? $container->load('getStatisticsManagerService')));
    }
}
