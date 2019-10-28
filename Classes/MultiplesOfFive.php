<?php

namespace Classes;

/**
 * Class MultiplesOfFive
 */
class MultiplesOfFive extends Numbers
{
    /**
     * MultiplesOfFive constructor.
     */
    public function __construct()
    {
        self::setNumbers([]);
        self::setFrom(5);
        self::setTo(100);
    }

    public function countNumbers()
    {
        for ($i = $this->from; $i <= $this->to; $i += 5) {
            $this->arrayNumbers[$i] = 'IT';
        }
    }
}
