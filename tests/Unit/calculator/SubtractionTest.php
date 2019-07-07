<?php

namespace Tests\Unit\calculator;

use Tests\TestCase;


class SubtractionTest extends TestCase
{
    /* test subtraction */
    public function testSubtractGivenNumbers()
    {
        $subtraction = new \App\Calculator\Subtraction;
        $subtraction->setNumbers([10,5]);

        $this->assertEquals(5, $subtraction->calculate());
    }
    
    //@todo more test
}