<?php

require_once "IOperation.php";

class Division implements IOperation {

    public function operate(float $operator1, float $operator2): float {
        if ($operator2 == 0) {
            throw new RuntimeException("No se puede dividir entre 0.");
        }
        return $operator1 / $operator2;
    }

}