<?php

/*
 * This file is part of the SexyField package.
 *
 * (c) Dion Snoeijen <hallo@dionsnoeijen.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare (strict_types=1);

namespace Tardigrades\Bundle\SexyFieldBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Tardigrades\DependencyInjection\SectionFieldApiExtension;
use Tardigrades\DependencyInjection\SectionFieldDoctrineExtension;
use Tardigrades\DependencyInjection\SectionFieldEntityExtension;
use Tardigrades\DependencyInjection\SectionFieldExtension;
use Tardigrades\DependencyInjection\SexyFieldFormExtension;

class SexyFieldExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        (new SectionFieldExtension())->load($configs, $container);
        (new SectionFieldEntityExtension())->load($configs, $container);
        (new SectionFieldDoctrineExtension())->load($configs, $container);
        (new SexyFieldFormExtension())->load($configs, $container);
        (new SectionFieldApiExtension())->load($configs, $container);
    }
}
