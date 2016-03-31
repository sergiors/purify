<?php

declare(strict_types = 1);

namespace Sergiors\Purify;

class ArrayType implements ArrayInterface
{
    /**
     * @var array
     */
    private $array;

    /**
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @return int
     *
     * @link http://php.net/count
     */
    public function length(): int
    {
        return count($this->array);
    }

    /**
     * @param string $glue
     *
     * @return StringInterface
     *
     * @link http://php.net/implode
     */
    public function join(string $glue = ''): StringInterface
    {
        return new StringType(implode($glue, $this->array));
    }

    /**
     * @return ArrayInterface
     *
     * @link http://php.net/array_flip
     */
    public function flip(): ArrayInterface
    {
        return new self(array_flip($this->array));
    }

    /**
     * @return array
     *
     * @link http://php.net/manual/en/arrayobject.getarraycopy.php
     */
    public function getArrayCopy(): array
    {
        return $this->array;
    }
}
