<?php

date_default_timezone_set('Europe/Sofia');

$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];


if (strtotime($dateOne) > strtotime($dateTwo)) {
	$start = strtotime($dateTwo);
	$end = strtotime($dateOne);
} else {
	$start = strtotime($dateOne);
	$end = strtotime($dateTwo);
}

$hasThursday = false;

for ($i = $start; $i <= $end; $i += (24 * 3600)) { 
	if (date("w", $i) == 4) {
		$hasThursday = true;
		$start = $i;
		break;
	}
}

if ($hasThursday) {
	echo "<ol>";
	while($start <= $end){
		echo "<li>" . date("d-m-Y", $start) . "</li>";
		$start += 7 * 24 * 3600;
	}
	echo "</ol>";
} else {
	echo "<h2>No Thursdays</h2>";
}


?>