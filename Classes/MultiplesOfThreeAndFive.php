<?php

namespace Classes;

/**
 * Class MultiplesOfThreeAndFive
 */
class MultiplesOfThreeAndFive extends Numbers
{
    /**
     * MultiplesOfThreeAndFive constructor.
     */
    public function __construct()
    {
        self::setNumbers([]);
        self::setFrom(15);
        self::setTo(100);
    }

    public function countNumbers()
    {
        for ($i = $this->from; $i <= $this->to; $i += 15) {
            $this->arrayNumbers[$i] = 'StarCorpianos';
        }
    }
}
