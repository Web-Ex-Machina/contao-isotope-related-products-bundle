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

namespace ContaoIsotopeRelatedProductsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoIsotopeRelatedProductsBundle\ContaoIsotopeRelatedProductsBundle;

/**
 * Plugin for the Contao Manager.
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoIsotopeRelatedProductsBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                    'isotope'
                ])
                ->setReplace(['contao-isotope-related-products-bundle']),
        ];
    }
}
