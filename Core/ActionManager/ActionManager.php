<?php
/*
 * This file is part of the AlphaLemonBootstrapBundle and it is distributed
 * under the MIT License. To use this bundle you must leave
 * intact this copyright notice.
 *
 * Copyright (c) AlphaLemon <webmaster@alphalemon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://alphalemon.com
 *
 * @license    MIT License
 */

namespace AlphaLemon\BootstrapBundle\Core\ActionManager;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\Util\Filesystem;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;
use AlphaLemon\BootstrapBundle\Core\Exception\InvalidProjectException;
use AlphaLemon\ThemeEngineBundle\Core\Autoloader\Exception\InvalidAutoloaderException;
use AlphaLemon\BootstrapBundle\Core\Json\JsonAutoloader;
use AlphaLemon\BootstrapBundle\Core\Event\BootstrapperEvents;
use AlphaLemon\BootstrapBundle\Core\Event\PackageInstalledEvent;
use AlphaLemon\BootstrapBundle\Core\Event\PackageUninstalledEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Implements all the methods declared by ActionManagerInterface executing a NOP action
 * @author AlphaLemon <webmaster@alphalemon.com>
 */
abstract class ActionManager implements ActionManagerInterface
{
    /**
     * {@inheritdoc] 
     */
    public function packageInstalledPreBoot()
    {
    }

    /**
     * {@inheritdoc] 
     */
    public function packageUninstalledPreBoot()
    {
    }

    /**
     * {@inheritdoc] 
     */
    public function packageInstalledPostBoot(ContainerInterface $container)
    {
    }

    /**
     * {@inheritdoc] 
     */
    public function packageUninstalledPostBoot(ContainerInterface $container)
    {
    }
}