<?php

/**
 * Interface Counter
 */
interface Counter
{
    public function countNumbers();
}

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

/**
 * Class NaturalNumbers
 */
class NaturalNumbers extends Numbers
{
    /**
     * NaturalNumbers constructor.
     */
    public function __construct()
    {
        self::setNumbers([]);
        self::setFrom(0);
        self::setTo(100);
    }
}

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

$naturalNumbersObj = new NaturalNumbers();
$naturalNumbersObj->countNumbers();
$arrayNaturalNumbers = $naturalNumbersObj->getNumbers();

$multiplesOfThreeObj = new MultiplesOfThree();
$multiplesOfThreeObj->countNumbers();
$arrayMultiplesOfThree = $multiplesOfThreeObj->getNumbers();

$multiplesOfFiveObj = new MultiplesOfFive();
$multiplesOfFiveObj->countNumbers();
$arrayMultiplesOfFive = $multiplesOfFiveObj->getNumbers();

$multiplesOfThreeAndFiveObj = new MultiplesOfThreeAndFive();
$multiplesOfThreeAndFiveObj->countNumbers();
$arrayMultiplesOfThreeAndFive = $multiplesOfThreeAndFiveObj->getNumbers();

$subArray1 = $arrayMultiplesOfThree + $arrayNaturalNumbers;
ksort($subArray1);

$subArray2 = $arrayMultiplesOfFive + $subArray1;
ksort($subArray2);

$finalArray = $arrayMultiplesOfThreeAndFive + $subArray2;
ksort($finalArray);

foreach ($finalArray as $key => $value) {
    echo $value . '<br />';
}
