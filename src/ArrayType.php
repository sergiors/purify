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
     */
    public function length(): int
    {
        return count($this->array);
    }

    /**
     * @param string $glue
     *
     * @return StringInterface
     */
    public function join(string $glue = ''): StringInterface
    {
        return new StringType(implode($glue, $this->array));
    }
}
