<?php

namespace RushlowDevelopment\AtomBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class RushlowDevelopmentAtomExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
        $loader->load('atom_services.xml');

        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);
    }

    public function getAlias(): string
    {
        return 'rushlowdevelopment_atom';
    }
}
