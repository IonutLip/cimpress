<?php

namespace Printi\CimpressBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class CimpressExtension extends Extension
{

    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');

        $config = $this->processConfiguration(new Configuration(), $configs);

        if (!empty($config)) {
            if (isset($config['credentials'])) {
                $container->setParameter('credentials', $config['credentials']);
            }

            if (isset($config['api']) && isset($config['api']['prepress'])) {
                $container->setParameter('prepress_client_id', $config['api']['prepress']['api_client_id']);
            }

            if (isset($config['api']) && isset($config['api']['pdf_processing'])) {
                $container->setParameter('pdf_processing_client_id', $config['api']['pdf_processing']['api_client_id']);
            }
        }
    }
}