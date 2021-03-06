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

namespace AlphaLemon\BootstrapBundle\Core\Script;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the base methods a Script object must implement
 * 
 * @author AlphaLemon <webmaster@alphalemon.com>
 */
interface ScriptInterface
{
    /**
     * Executes the actions from the given ActionManager objects 
     * 
     * @param array
     */
    public function executeActions(array $actionManagers);
}