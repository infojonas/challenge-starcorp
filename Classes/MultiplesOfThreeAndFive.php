<?php

namespace Classes;

/**
 * Class MultiplesOfThreeAndFive
 */
class MultiplesOfThreeAndFive extends Numbers
{
    public $multipleOfThreeAndFive;

    /**
     * MultiplesOfThreeAndFive constructor.
     */
    public function __construct()
    {
        self::calculateMultipleOfThreeAndFive();
        self::setNumbers([]);
        self::setFrom($this->multipleOfThreeAndFive);
        self::setTo(100);
    }

    public function countNumbers()
    {
        for ($i = $this->from; $i <= $this->to; $i += $this->multipleOfThreeAndFive) {
            $this->arrayNumbers[$i] = 'StarCorpianos';
        }
    }

    public function calculateMultipleOfThreeAndFive() {
        $arrayMMC = [];
        $arrayDividers = [2,3,5];
        $result = 1;

        foreach ($arrayDividers as $divider) {
            if (3 % $divider === 0) {
                $arrayMMC[] = $divider;
            }

            if (5 % $divider === 0) {
                $arrayMMC[] = $divider;
            }
        }

        foreach ($arrayMMC as $mmc) {
            $result *= $mmc;
        }

        $this->multipleOfThreeAndFive = $result;
    }
}
