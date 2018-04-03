<?php

namespace Printi\CimpressBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $root = $builder->root('cimpress');
        $root
            ->children()
                ->arrayNode('credentials')
                    ->useAttributeAsKey('name')
                    ->prototype('variable')->end()
                ->end()
                ->arrayNode('api')
                    ->useAttributeAsKey('name')
                    ->prototype('variable')->end()
                ->end()
            ->end();

        return $builder;
    }
}
