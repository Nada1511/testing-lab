<?php

use PHPUnit\Framework\TestCase;
require './src/Calc.php';

class CalcTest extends TestCase
{
    public function testcalculationZero()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(0);
        $this->assertEquals(1, $result);
    }

    public function testcalculationOne()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(1);
        $this->assertEquals(1, $result);
    }

    public function testcalculationFive()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(5);
        $this->assertEquals(120, $result);
    }

    public function testcalculationRandomInt()
    {
        $mathtest = new Calc();
        $randomInt = mt_rand(4, 100); 
        $expectedResult = $mathtest->calculation($randomInt - 1) * $randomInt;
        $result = $mathtest->calculation($randomInt);
        $this->assertEquals($expectedResult, $result);
    }

    public function testcalculationNegative()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(-3);
        $this->assertNull($result);
    }

    public function testcalculationFloat()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(1.5);
        $this->assertNull($result);
    }

    public function testcalculationFalse()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation(false);
        $this->assertNull($result);
    }

    public function testcalculationString()
    {
        $mathtest = new Calc();
        $result = $mathtest->calculation('abc');
        $this->assertNull($result);
    }
}


?>