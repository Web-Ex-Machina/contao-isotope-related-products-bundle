<?php

declare(strict_types=1);

/**
 * Contao Twitch Feed Bundle for Contao Open Source CMS
 * Copyright (c) 2022 Web ex Machina
 *
 * @category ContaoBundle
 * @package  Web-Ex-Machina/contao-twitch-feed-bundle
 * @author   Web ex Machina <contact@webexmachina.fr>
 * @link     https://github.com/Web-Ex-Machina/contao-twitch-feed-bundle/
 */

namespace ContaoIsotopeRelatedProductsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Adds the bundle services to the container.
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */
class ContaoIsotopeRelatedProductsExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');
    }
}
