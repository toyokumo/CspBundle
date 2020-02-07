<?php

namespace Toyokumo\CspBundle\DependencyInjection;

use Exception;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

final class ToyokumoCspExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('toyokumo.csp.default', $config['default_src']);
        $container->setParameter('toyokumo.csp.script', $config['script_src']);
        $container->setParameter('toyokumo.csp.style', $config['style_src']);
        $container->setParameter('toyokumo.csp.frame', $config['frame_src']);
        $container->setParameter('toyokumo.csp.manifest', $config['manifest_src']);
        $container->setParameter('toyokumo.csp.img', $config['img_src']);
        $container->setParameter('toyokumo.csp.font', $config['font_src']);
        $container->setParameter('toyokumo.csp.connect', $config['connect_src']);
        $container->setParameter('toyokumo.csp.object', $config['object_src']);
        $container->setParameter('toyokumo.csp.media', $config['media_src']);
        $container->setParameter('toyokumo.csp.child', $config['child_src']);
        $container->setParameter('toyokumo.csp.sandbox', $config['sandbox']);
        $container->setParameter('toyokumo.csp.form-action', $config['form_action']);
        $container->setParameter('toyokumo.csp.frame-ancestors', $config['frame_ancestors']);
        $container->setParameter('toyokumo.csp.plugin-types', $config['plugin_types']);
        $container->setParameter('toyokumo.csp.base-uri', $config['base_uri']);
        $container->setParameter('toyokumo.csp.report-uri', $config['report_uri']);
    }
}
