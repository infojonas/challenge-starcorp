<?php

namespace Classes;

/**
 * Class Numbers
 */
class NaturalNumbers extends Numbers
{
    /**
     * Numbers constructor.
     */
    public function __construct()
    {
        self::setNumbers([]);
        self::setFrom(0);
        self::setTo(100);
    }
}
