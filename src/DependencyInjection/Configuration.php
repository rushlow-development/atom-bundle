<?php

namespace RushlowDevelopment\AtomBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('rushlowdevelopment_atom_bundle');

        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
