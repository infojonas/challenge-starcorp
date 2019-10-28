<?php

interface Counter
{
    public function countNumbers();
}

class Numbers implements Counter
{
    public $arrayNumbers;
    public $from;
    public $to;

    public function setNumbers(array $arrayNumbers) {
        $this->arrayNumbers = $arrayNumbers;
    }

    public function setFrom(int $from) {
        $this->from = $from;
    }

    public function setTo(int $to) {
        $this->to = $to;
    }

    public function countNumbers() {
        for ($i = $this->from; $i <= $this->to; $i++) {
            $this->arrayNumbers[$i] = $i;
        }
    }

    public function getNumbers() {
        return $this->arrayNumbers;
    }
}

class NaturalNumbers extends Numbers
{
    public function __construct() {
        self::setNumbers([]);
        self::setFrom(0);
        self::setTo(100);
    }
}

class MultiplesOfThree extends Numbers
{
    public function __construct() {
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

class MultiplesOfFive extends Numbers
{
    public function __construct() {
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

class MultiplesOfThreeAndFive extends Numbers
{
    public function __construct() {
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

foreach($finalArray as $key => $value) {
    echo $value . '<br />';
}
