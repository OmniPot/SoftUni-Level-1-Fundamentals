<?php

$inputArr = array([2, 5], [1.567808, 0.356], [1234.5678, 333]);

foreach ($inputArr as $item) {
    $firstNumber = $item[0];
    $secondNumber = $item[1];
    $result = (double)($firstNumber + $secondNumber);

    echo '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = " . number_format($result, 2, '.', '') . "<br>\n";
}
?>