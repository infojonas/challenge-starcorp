<?php

namespace Classes;

use Interfaces\Counter;

/**
 * Class Numbers
 */
class Numbers implements Counter
{
    public $arrayNumbers;
    public $from;
    public $to;

    /**
     * @param array $arrayNumbers
     */
    public function setNumbers(array $arrayNumbers)
    {
        $this->arrayNumbers = $arrayNumbers;
    }

    /**
     * @param int $from
     */
    public function setFrom(int $from)
    {
        $this->from = $from;
    }

    /**
     * @param int $to
     */
    public function setTo(int $to)
    {
        $this->to = $to;
    }

    public function countNumbers()
    {
        for ($i = $this->from; $i <= $this->to; $i++) {
            $this->arrayNumbers[$i] = $i;
        }
    }

    /**
     * @return array
     */
    public function getNumbers(): array
    {
        return $this->arrayNumbers;
    }
}
