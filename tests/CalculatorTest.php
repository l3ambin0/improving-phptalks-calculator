<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase{

    function testAdd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(20, 5);
        $this->assertEquals(25, $result);
    }

    // TODO: testSubstract()
    // TODO: testMultiply()
    // TODO: testDivide()


}