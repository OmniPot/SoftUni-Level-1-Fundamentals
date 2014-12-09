<?php

$inputArr = [1234, 145, 15, 247];

foreach ($inputArr as $item) {
    if($item < 102){
        echo "no\n";
        continue;
    }

    for ($i = 1; $i <= 9; $i += 1) {
        for ($j = 0; $j <= 9; $j += 1) {
            for ($k = 0; $k <= 9; $k += 1) {
                $currNum = 100 * $i + 10 * $j + $k;

                if (($i == $j || $i == $k || $j == $k) || $currNum > $item) {
                    continue;
                }
                echo $currNum . ', ';
            }
        }
    }
    echo "\n";
}

?>