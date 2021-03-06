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
 *
 * @author AlphaLemon <webmaster@alphalemon.com>
 */
interface PostScriptInterface extends ScriptInterface
{
    public function setContainer(ContainerInterface $container);
    public function executeActionsFromFile($fileName);
}