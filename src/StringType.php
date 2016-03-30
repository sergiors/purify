<?php

declare(strict_types = 1);

namespace Sergiors\Purify;

class StringType implements StringInterface
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function length(): int
    {
        return strlen($this->string);
    }

    public function slice(int $offset, $length = null): StringInterface
    {
        $length = $this->prepareLength($offset, $length);

        if (0 === $length) {
            return new self('');
        }

        return new self(substr($this->string, $offset, $length));
    }

    public function __toString(): string
    {
        return (string) $this->string;
    }

    private function prepareLength(int $offset, $length): int
    {
        if (null === $length) {
            return $this->length() - $offset;
        }
    }
}
