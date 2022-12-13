<?php

namespace ContainerDsqe8Mo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubpanelButtonTraverserService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\LegacyHandler\SubpanelButtonTraverser' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\SubpanelButtonTraverser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'ViewDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'SubpanelButtonTraverser.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Module'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ModuleAwareRegistry.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'ViewDefinitions'.\DIRECTORY_SEPARATOR.'LegacyHandler'.\DIRECTORY_SEPARATOR.'SubpanelButtonMappers.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\SubpanelButtonTraverser'] = new \App\ViewDefinitions\LegacyHandler\SubpanelButtonTraverser(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), new \App\ViewDefinitions\LegacyHandler\SubpanelButtonMappers(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateAccountNameButtonMapper'] ?? $container->load('getCreateAccountNameButtonMapperService'));
            yield 1 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateButtonMapper'] ?? $container->load('getCreateButtonMapperService'));
            yield 2 => ($container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateLeadNameButtonMapper'] ?? $container->load('getCreateLeadNameButtonMapperService'));
        }, 3)));
    }
}
