<html lang="en">
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="operator1">
        <select name="options">
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">*</option>
            <option value="3">/</option>
        </select>
        <input type="number" name="operator2">
        <input type="submit" name="calculate" value="=">
    </form>
</body>
</html>

<?php

require_once "src/Calculator.php";

if (isset($_REQUEST['calculate'])) {
    $operator1 = $_REQUEST['operator1'];
    $operator2 = $_REQUEST['operator2'];
    $options = $_REQUEST['options'];

    switch ($options) {
        case 0:
            $resultado = $operator1." + ".$operator2." = ".Calculator::sum($operator1, $operator2);
            echo $resultado;
            break;
        case 1:
            $resultado = $operator1." - ".$operator2." = ".Calculator::subtract($operator1, $operator2);
            echo $resultado;
            break;
        case 2:
            $resultado = $operator1." * ".$operator2." = ".Calculator::multiply($operator1, $operator2);
            echo $resultado;
            break;
        case 3:
            $resultado = $operator1." / ".$operator2." = ".Calculator::divide($operator1, $operator2);
            echo $resultado;
            break;
    }
}