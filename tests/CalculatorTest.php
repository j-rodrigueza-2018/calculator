<?php

require_once "src/Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    private const SUM_RESULT = 15;
    private const SUB_RESULT = 5;
    private const MUL_RESULT = 50;
    private const DIV_RESULT = 2;

    protected function setUp(): void {
        $this->calculator = new Calculator();
        $this->operator1 = 10;
        $this->operator2 = 5;
    }

    protected function tearDown(): void {
        unset($this->calculator);
        unset($this->operator1);
        unset($this->operator2);
    }

    public function testSum() {
        $this->assertEquals(self::SUM_RESULT, $this->calculator::sum($this->operator1, $this->operator2));
    }

    public function testSubtract() {
        $this->assertEquals(self::SUB_RESULT, $this->calculator::subtract($this->operator1, $this->operator2));
    }

    public function testMultiply() {
        $this->assertEquals(self::MUL_RESULT, $this->calculator::multiply($this->operator1, $this->operator2));
    }

    public function testDivide() {
        $this->assertEquals(self::DIV_RESULT, $this->calculator::divide($this->operator1, $this->operator2));
    }

    public function testDivideByZero() {
        $this->expectException(RuntimeException::class);
        $this->calculator::divide($this->operator1, 0);
    }

}
