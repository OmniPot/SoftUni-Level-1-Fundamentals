<?php

$text = $_GET['text'];
$minFont = $_GET['minFontSize'];
$maxFont = $_GET['maxFontSize'];
$step = $_GET['step'];

//$text = "Hi PHP5";
//$minFont = 4;
//$maxFont = 10;
//$step = 3;

$textArr = preg_split("//", $text, -1, PREG_SPLIT_NO_EMPTY);

$currentFont = $minFont;
$ascending = true;

for ($i = 0; $i < count($textArr); $i += 1) {
    if (ord($textArr[$i]) % 2 == 0) {
        echo "<span style='font-size:$currentFont;text-decoration:line-through;'>" . htmlspecialchars($textArr[$i]) . "</span>";
    } else {
        echo "<span style='font-size:$currentFont;'>" . htmlspecialchars($textArr[$i]) . "</span>";
    }
    if ($currentFont >= $maxFont) {
        $ascending = false;
    } else if ($currentFont <= $minFont) {
        $ascending = true;
    }
    if (ctype_alpha($textArr[$i])) {
        if ($ascending) {
            $currentFont += $step;
        } else {
            $currentFont -= $step;
        }
    }
}

?>