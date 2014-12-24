<?php

$keys = $_GET['keys'];
$text = $_GET['text'];

$keysPattern = '/^([A-Z-a-z\_]+)\d.*\d([A-Z-a-z\_]+)$/';

preg_match_all($keysPattern, $keys, $matches);

if (empty($matches[0])) {
	echo "<p>A key is missing</p>";
	exit();
}else{
	$startKey = $matches[1][0];
	$endKey = $matches[2][0];
}

$textPattern = '/' . $startKey . '(.*?|)' . $endKey . '/';

preg_match_all($textPattern, $text, $values);

$values = $values[1];

$foundVal = false;
$sum = 0;

foreach ($values as $val) {
	if (is_numeric($val)) {
		$sum += floatval($val);
		$foundVal = true;
	}
}

if ($sum == 0) {
	echo "<p>The total value is: <em>nothing</em></p>";
}else{
	echo "<p>The total value is: <em>" . $sum . "</em></p>";
}

?>