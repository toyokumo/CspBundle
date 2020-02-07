<?php

namespace Toyokumo\CspBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('toyokumo_csp');
        $rootNode->children()
            ->scalarNode('default_src')
            ->defaultNull()
            ->end()
            ->scalarNode('script_src')
            ->defaultNull()
            ->end()
            ->scalarNode('style_src')
            ->defaultNull()
            ->end()
            ->scalarNode('frame_src')
            ->defaultNull()
            ->end()
            ->scalarNode('manifest_src')
            ->defaultNull()
            ->end()
            ->scalarNode('img_src')
            ->defaultNull()
            ->end()
            ->scalarNode('font_src')
            ->defaultNull()
            ->end()
            ->scalarNode('connect_src')
            ->defaultNull()
            ->end()
            ->scalarNode('object_src')
            ->defaultNull()
            ->end()
            ->scalarNode('media_src')
            ->defaultNull()
            ->end()
            ->scalarNode('sandbox')
            ->defaultNull()
            ->end()
            ->scalarNode('child_src')
            ->defaultNull()
            ->end()
            ->scalarNode('form_action')
            ->defaultNull()
            ->end()
            ->scalarNode('frame_ancestors')
            ->defaultNull()
            ->end()
            ->scalarNode('plugin_types')
            ->defaultNull()
            ->end()
            ->scalarNode('base_uri')
            ->defaultNull()
            ->end()
            ->scalarNode('report_uri')
            ->defaultNull()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
