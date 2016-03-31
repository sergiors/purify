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
        $array = new ArrayType(['lastname', 'email', 'phone']);
        $this->assertInstanceOf(StringInterface::class, $array->join());
        $this->assertEquals('lastname,email,phone', $array->join(','));
    }

    /**
     * @test
     */
    public function flip()
    {
        $trans = new ArrayType(['a' => 1, 'b' => 1, 'c' => 2]);
        $expected = [1 => 'b', 2 => 'c'];

        $this->assertEquals($expected, $trans->flip()->getArrayCopy());
    }
}
