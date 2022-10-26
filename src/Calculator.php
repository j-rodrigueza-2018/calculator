<?php

require_once "FactoryOperation.php";

class Calculator {

    public static function sum(float $operator1, float $operator2): float {
        $operation = FactoryOperation::getOperation(FactoryOperation::SUM);
        return $operation->operate($operator1, $operator2);
    }

    public static function subtract(float $operator1, float $operator2): float {
        $operation = FactoryOperation::getOperation(FactoryOperation::SUB);
        return $operation->operate($operator1, $operator2);
    }

    public static function multiply(float $operator1, float $operator2): float {
        $operation = FactoryOperation::getOperation(FactoryOperation::MUL);
        return $operation->operate($operator1, $operator2);
    }

    public static function divide(float $operator1, float $operator2): float {
        $operation = FactoryOperation::getOperation(FactoryOperation::DIV);
        return $operation->operate($operator1, $operator2);
    }

}