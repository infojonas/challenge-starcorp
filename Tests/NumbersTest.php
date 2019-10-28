<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Classes\Numbers;

class NumbersTest extends TestCase
{
    public function testIfNumbersCanBeGenerated()
    {
        $numbers = new Numbers();

        $numbers->setNumbers([]);
        $numbers->setFrom(1);
        $numbers->setTo(5);
        $numbers->countNumbers();

        $response = $numbers->getNumbers();
        $responseExpected = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];

        $this->assertEquals($responseExpected, $response);
    }
}
