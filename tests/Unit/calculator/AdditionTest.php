<?php

namespace Tests\Unit\calculator;

use Tests\TestCase;


class AdditionTest extends TestCase
{
    /* test addition */
    public function testAddsUpGivenNumbers()
    {
        $addition = new \App\Calculator\Addition;
        $addition->setNumbers([1,1]);

        $this->assertEquals(2, $addition->calculate());
    }
    
    //@todo more test
}
