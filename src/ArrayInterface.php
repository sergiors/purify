<?php

declare(strict_types = 1);

namespace Sergiors\Purify;

interface ArrayInterface extends ScalarInterface
{
    /**
     * @return ArrayInterface
     */
    public function getArrayCopy();
}
