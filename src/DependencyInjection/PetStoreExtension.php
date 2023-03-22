<?php

namespace CommonGateway\PetStoreBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This class adds depedency injection.
 */
class PetStoreExtension extends Extension
{
    /**
     * The laod function is triggerd by symfony and loads the bundels services files.
     *
     * @param array            $configs   The configuration
     * @param ContainerBuilder $container The container
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
        $loader->load('services.yaml');
    }//end load()
}//end class
