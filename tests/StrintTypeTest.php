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
        $str = new StringType('lorem ipsum');
        $this->assertEquals(11, $str->length());
    }

    /**
     * @test
     */
    public function slice()
    {
        $str = new StringType('lorem ipsum');
        $this->assertEquals('ipsum', $str->slice(6));
    }
}
