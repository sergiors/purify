<?php

namespace Sergiors\Purify\Tests;

use Sergiors\Purify\StringType;

class StringTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function length()
    {
        $str = new StringType('abcdef');
        $this->assertEquals(6, $str->length());

        $str = new StringType('');
        $this->assertEquals(0, $str->length());
    }

    /**
     * @test
     */
    public function slice()
    {
        $str = new StringType('abcdef');

        $this->assertEquals('f', $str->slice(-1));
        $this->assertEquals('', $str->slice(1, 0));
    }
}
