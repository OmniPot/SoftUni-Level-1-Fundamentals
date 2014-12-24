<?php

//$text = $_GET['text'];
//$lineLength = $_GET['lineLength'];

$text = 'The Milky Way is the galaxy that contains our star system';
$lineLength = $cols = 10;
$rowsCount = $rows = intval(ceil(strlen($text) / $lineLength));

$matrix = array();

for ($i = 0; $i < $rows; $i += 1) {
    $row = [];
    for ($j = 0; $j < $cols; $j += 1) {
        $r = substr($text, $i * $cols + $j, 1);
        $r == '' ? $row[] = ' ' : $row[] = $r;
    }
    $matrix[] = $row;
}

var_dump($matrix, $rows, $cols);

for ($i = $rows - 1; $i >= 0; $i -= 1) {
    for ($j = 0; $j < $cols; $j += 1) {
        $curRow = $i;
        $curCol = $j;

    }
}

var_dump($matrix);


?>