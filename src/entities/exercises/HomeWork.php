<?php

namespace Entities\HomeWorks;

class HomeWork
{
    private $exNumber = 1;

    /**
     * HomeWork constructor.
     * @param int|null $exNumber
     */
    public function __construct(?int $exNumber = 1)
    {
        $this->exNumber = $exNumber;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->exNumber}";
    }
}