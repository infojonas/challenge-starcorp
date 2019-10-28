<?php

namespace Classes;

/**
 * Class MultiplesOfThree
 */
class MultiplesOfThree extends Numbers
{
    /**
     * MultiplesOfThree constructor.
     */
    public function __construct()
    {
        self::setNumbers([]);
        self::setFrom(3);
        self::setTo(100);
    }

    public function countNumbers()
    {
        for ($i = $this->from; $i <= $this->to; $i += 3) {
            $this->arrayNumbers[$i] = 'StarCorp';
        }
    }
}
