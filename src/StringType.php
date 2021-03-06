<?php

declare(strict_types = 1);

namespace Sergiors\Purify;

class StringType implements StringInterface
{
    /**
     * @var string
     */
    private $string;

    /**
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @return int
     *
     * @link http://php.net/strlen
     */
    public function length(): int
    {
        return strlen($this->string);
    }

    /**
     * @param int      $offset
     * @param int|null $length
     *
     * @return StringInterface
     *
     * @throws \TypeError
     *
     * @link http://php.net/substr
     */
    public function slice(int $offset, $length = null): StringInterface
    {
        $length = $this->prepareLength($offset, $length);

        if (0 === $length) {
            return new self('');
        }

        return new self(substr($this->string, $offset, $length));
    }

    /**
     * @param mixed $search
     * @param mixed $replace
     *
     * @return StringType
     *
     * @link http://php.net/str_replace
     */
    public function replace($search, $replace): StringType
    {
        return new self(str_replace($search, $replace, $this->string));
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->string;
    }

    /**
     * @param int   $offset
     * @param mixed $length
     *
     * @return int
     *
     * @throws \TypeError
     */
    private function prepareLength(int $offset, $length): int
    {
        if (null === $length) {
            return $this->length() - $offset;
        }

        if (!is_numeric($length)) {
            throw new \TypeError(sprintf(
                'Argument 2 passed to %s() must be of the type integer, %s given, called in %s on line %d',
                __METHOD__,
                gettype($length),
                __FILE__,
                __LINE__
            ));
        }

        return $length;
    }
}
