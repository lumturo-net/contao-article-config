<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace lumturo\ArticleConfigBundle\ContaoManager;
// namespace Contao\SkeletonBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
// use Contao\SkeletonBundle\ContaoSkeletonBundle;
use lumturo\ArticleConfigBundle\ArticleConfigBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ArticleConfigBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}