<?php

require_once "Sum.php";
require_once "Subtraction.php";
require_once "Multiplication.php";
require_once "Division.php";

class FactoryOperation {

    const SUM = '+';
    const SUB = '-';
    const MUL = '*';
    const DIV = '/';

    public static function getOperation(string $operator): IOperation {
        return match ($operator) {
            self::SUM => new Sum(),
            self::SUB => new Subtraction(),
            self::MUL => new Multiplication(),
            self::DIV => new Division(),
        };
    }

}