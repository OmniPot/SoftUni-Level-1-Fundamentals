<?php

$text = $_GET['text'];
$red = $_GET['red'];
$green = $_GET['green'];
$blue = $_GET['blue'];
$nth = $_GET['nth'];

$redHex = dechex($red);
$greenHex = dechex($green);
$blueHex = dechex($blue);

if (strlen($redHex) < 2) {
    $redHex = str_pad($redHex, 2, '0', STR_PAD_LEFT);
}
if (strlen($greenHex) < 2) {
    $greenHex = str_pad($greenHex, 2, '0', STR_PAD_LEFT);
}
if (strlen($blueHex) < 2) {
    $blueHex = str_pad($blueHex, 2, '0', STR_PAD_LEFT);
}
$hexColor = $redHex . $greenHex . $blueHex;
$times = 1;
echo "<p>";
for ($i = 0; $i < strlen($text); $i += 1) {
    if ($times == $nth) {
        echo "<span style=\"color: #$hexColor\">" . htmlspecialchars($text[$i]) . "</span>";
        $times = 1;
    } else {
        echo htmlentities($text[$i]);
        $times++;
    }
}
echo "</p>";

?>