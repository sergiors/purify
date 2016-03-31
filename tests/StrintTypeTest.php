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
        $this->assertEquals(3, $str->replace('def', '')->length());

        $str = new StringType('');
        $this->assertEquals(0, $str->length());
    }

    /**
     * @test
     */
    public function slice()
    {
        $rest = new StringType('abcdef');

        $this->assertEquals('f', $rest->slice(-1));
        $this->assertEquals('', $rest->slice(1, 0));
    }

    /**
     * @test
     */
    public function replace()
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $onlyconsonants = new StringType('Hello World of PHP');

        $this->assertEquals('Hll Wrld f PHP', $onlyconsonants->replace($vowels, ''));
    }
}
