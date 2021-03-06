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

namespace AlphaLemon\BootstrapBundle\Tests\Unit\Json;

use org\bovigo\vfs\vfsStream;
use AlphaLemon\BootstrapBundle\Tests\TestCase;
use AlphaLemon\BootstrapBundle\Core\Json\Bundle\Bundle;


/**
 * BundleTest
 *
 * @author AlphaLemon <webmaster@alphalemon.com>
 */
class BundleTest extends TestCase
{
    private $bundle;

    protected function setUp()
    {
        parent::setUp();
        
        $this->bundle = new Bundle();
    }
    
    /**
     * @expectedException \AlphaLemon\BootstrapBundle\Core\Exception\InvalidJsonParameterException
     * @expectedExceptionMessage The class AlphaLemon\Block\BusinessCarouselFakeBundle\BusinessCarouselBundl does not seem to be a valid bundle class. Check your autoloader.json file
     */
    public function testAnExceptionIsThrownWhenTheGivenClassIsInvalid()
    {
        $this->bundle->setClass("AlphaLemon\\Block\\BusinessCarouselFakeBundle\\BusinessCarouselBundl");
    }
    
    public function testSettingTheClassPropertySetsTheBundleIdToo()
    {
        $this->assertNull($this->bundle->getId());
        $this->bundle->setClass("AlphaLemon\\Block\\BusinessCarouselFakeBundle\\BusinessCarouselFakeBundle");
        $this->assertEquals("AlphaLemon\\Block\\BusinessCarouselFakeBundle\\BusinessCarouselFakeBundle", $this->bundle->getClass());        
        $this->assertEquals("BusinessCarouselFakeBundle", $this->bundle->getId());
        $this->assertEquals("BusinessCarouselFakeBundle", $this->bundle->__toString());
    }
    
    public function testSetTheOverridesProperty()
    {
        $overridesValue = array("BusinessCarouselFakeBundle");
        $this->bundle->setOverrides($overridesValue);
        $this->assertEquals($overridesValue, $this->bundle->getOverrides());
    }
    
    
}