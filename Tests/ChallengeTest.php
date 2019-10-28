<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Classes\MultiplesOfThreeAndFive;

class ChallengeTest extends TestCase
{
    public function testTheChallenge()
    {
        $numbers = new MultiplesOfThreeAndFive();

        $numbers->countNumbers();

        $response = $numbers->getNumbers();

        $responseExpected = [];

        for ($i = 15; $i <= 100; $i += 15) {
            $responseExpected[$i] = $i;
        }

        $this->assertEquals($responseExpected, $response);
    }
}
