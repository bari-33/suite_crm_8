<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimeFormatPreferenceMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\UserPreferences\LegacyHandler\Mappers\TimeFormatPreferenceMapper' shared autowired service.
     *
     * @return \App\UserPreferences\LegacyHandler\Mappers\TimeFormatPreferenceMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'UserPreferences'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'UserPreferencesMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'UserPreferences'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'TimeFormatPreferenceMapper.php';

        return $container->privates['App\\UserPreferences\\LegacyHandler\\Mappers\\TimeFormatPreferenceMapper'] = new \App\UserPreferences\LegacyHandler\Mappers\TimeFormatPreferenceMapper(($container->privates['App\\DateTime\\LegacyHandler\\DateTimeHandler'] ?? $container->load('getDateTimeHandlerService')));
    }
}
