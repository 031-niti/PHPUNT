<?php
include "calculator.php";

use PHPUnit\Framework\TestCase;

class Calculatortest extends TestCase {

    public function testAddNumberPositive(){
        $c1 = new Calclator();
        $this->assertEquals(14, $c1->addNumber(5,9));
        $this->assertEquals(57, $c1->addNumber(5,52));
    }

    public function testAddNumberNegative(){
        $c1 = new Calclator();
        $this->assertEquals(-4, $c1->addNumber(5,-9));
        $this->assertEquals(-107, $c1->addNumber(-55,-52));
    }
}

?>