<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Classes\NaturalNumbers;

class NaturalNumbersTest extends TestCase
{
    public function testIfNaturalNumbersCanBeGenerated()
    {
        $numbers = new NaturalNumbers();

        $numbers->countNumbers();

        $response = $numbers->getNumbers();

        $responseExpected = [];

        for ($i = 1; $i <= 100; $i++) {
            $responseExpected[$i] = $i;
        }

        $this->assertEquals($responseExpected, $response);
    }
}
