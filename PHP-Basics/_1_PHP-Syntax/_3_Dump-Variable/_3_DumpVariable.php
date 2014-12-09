<?php

$string = "hello";
$int = 15;
$double = 1.234;
$arr = array(1, 2, 3);
$obj = (object)[2, 34];

$arrOfVars = [$string, $int, $double, $arr, $obj];

foreach ($arrOfVars as $item) {
    if (is_numeric($item)) {
        var_dump($item);
    } else {
        echo gettype($item) . "\n";
    }
}

?>

