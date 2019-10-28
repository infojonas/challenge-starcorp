<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Classes\MultiplesOfThree;

class MultiplesOfThreeTest extends TestCase
{
    public function testIfMultiplesOfThreeCanBeGenerated()
    {
        $numbers = new MultiplesOfThree();

        $numbers->countNumbers();

        $response = $numbers->getNumbers();

        $responseExpected = [];

        for ($i = 3; $i <= 100; $i += 3) {
            $responseExpected[$i] = $i;
        }

        $this->assertEquals($responseExpected, $response);
    }
}
