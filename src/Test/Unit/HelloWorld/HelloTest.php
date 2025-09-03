<?php
/**
 * Copyright © 2010-2018 Epicor Software Corporation: All Rights Reserved
 */

namespace Test\Unit\HelloWorld;

use HelloWorld\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{

    public function testPrintHelloWorld()
    {
        $testClass = new Hello();
        $result = $testClass->printHelloWorld();

        $this->assertEquals('Hello World I am alive', $result);
    }
}

