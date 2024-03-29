<?php

require 'Interfaces\CounterInterface.php';
require 'Classes\Numbers.php';
require 'Classes\NaturalNumbers.php';
require 'Classes\MultiplesOfFive.php';
require 'Classes\MultiplesOfThree.php';
require 'Classes\MultiplesOfThreeAndFive.php';

use Classes\MultiplesOfFive;
use Classes\MultiplesOfThree;
use Classes\MultiplesOfThreeAndFive;
use Classes\NaturalNumbers;

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
