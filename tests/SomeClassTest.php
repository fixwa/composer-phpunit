<?php

namespace Tests;

use ApplicationName\SomeClass;
use PHPUnit\Framework\TestCase;

class SomeClassTest extends TestCase
{
    public function testSomething()
    {
        $theClass = new SomeClass();

        $this->assertTrue($theClass->thisReturnsTrue());
    }
}