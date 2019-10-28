<?php

namespace Tests;

use Classes\MultiplesOfFive;
use PHPUnit\Framework\TestCase;

class MultiplesOfFiveTest extends TestCase
{
    public function testIfMultiplesOfFiveCanBeGenerated()
    {
        $numbers = new MultiplesOfFive();

        $numbers->countNumbers();

        $response = $numbers->getNumbers();

        $responseExpected = [];

        for ($i = 5; $i <= 100; $i += 5) {
            $responseExpected[$i] = $i;
        }

        $this->assertEquals($responseExpected, $response);
    }
}
