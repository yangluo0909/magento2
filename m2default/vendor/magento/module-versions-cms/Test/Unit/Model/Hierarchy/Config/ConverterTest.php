<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\VersionsCms\Test\Unit\Model\Hierarchy\Config;

use Magento\VersionsCms\Model\Hierarchy\Config\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /**
     * @var Converter
     */
    protected $_model;

    protected function setUp(): void
    {
        $this->_model = new Converter();
    }

    /**
     * @covers \Magento\VersionsCms\Model\Hierarchy\Config\Converter::convert
     */
    public function testConvert()
    {
        $basePath = realpath(__DIR__) . '/_files/';
        $path = $basePath . 'menu_hierarchy.xml';
        $domDocument = new \DOMDocument();
        $domDocument->load($path);
        $expectedData = include $basePath . 'menuHierarchy.php';
        $this->assertEquals($expectedData, $this->_model->convert($domDocument));
    }
}
