<?php

require_once "IOperation.php";

class Sum implements IOperation {

    public function operate(float $operator1, float $operator2): float {
        return $operator1 + $operator2;
    }

}