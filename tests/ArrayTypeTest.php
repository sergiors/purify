<?php

namespace Sergiors\Purify\Tests;

use Sergiors\Purify\ArrayType;
use Sergiors\Purify\StringInterface;

class ArrayTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function length()
    {
        $arr = new ArrayType(['a', 'b', 'c']);
        $this->assertEquals(3, $arr->length());
    }

    /**
     * @test
     */
    public function join()
    {
        $arr = new ArrayType(['a', 'b', 'c']);
        $this->assertInstanceOf(StringInterface::class, $arr->join());
        $this->assertEquals('abc', $arr->join());
    }
}
