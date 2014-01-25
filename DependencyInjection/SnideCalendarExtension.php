<?php


namespace Snide\Bundle\CalendarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;


/**
 * Class SnideCalendarExtension
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class SnideCalendarExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @param array $configs    An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @api
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('model.xml');
        $loader->load('form.xml');
        $loader->load('manager.xml');

        $this->loadRepository($loader, $container, $config);
    }

    /**
     * Load repository
     *
     * @param XmlFileLoader $loader
     * @param ContainerBuilder $container
     * @param array $config
     * @throws \Exception
     */
    protected function loadRepository($loader, ContainerBuilder $container, array $config)
    {
        if (isset($config['repository']['type'])) {
            $loader->load('repository/' . strtr($config['repository']['type'], '_', '/') . '.xml');
        } else {
            throw new InvalidConfigurationException('You must define repository type parameter');
        }
    }
}
