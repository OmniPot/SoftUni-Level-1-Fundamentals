<?php

date_default_timezone_set('Europe/Sofia');

$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];
$holidays = $_GET['holidays'];

preg_match_all("/.*[^\s]/", $holidays, $holidays);

$holidays = $holidays[0];

for ($i = 0; $i < count($holidays); $i++) { 
	$holidays[$i] = strtotime($holidays[$i]);
}

$dateOne = strtotime($dateOne);
$dateTwo = strtotime($dateTwo);

$workdays = array();

while($dateOne <= $dateTwo){

	$isWorkday = true;

	for ($i = 0; $i < count($holidays); $i++) { 

		if ($holidays[$i] == $dateOne) {
			$isWorkday = false;
		}
	}

	if (date("N", $dateOne) == 6 || date("N", $dateOne) == 7) {

		$isWorkday = false;
	}

	if ($isWorkday) {

		$workdays[] = date("d-m-Y", $dateOne);
	}

	$dateOne += 24 * 3600;
}

if (count($workdays) > 0) {

	echo "<ol>";

	foreach ($workdays as $date) {
		echo "<li>" . $date . "</li>";
	}

	echo "</ol>";

}else{
	echo "<h2>No workdays</h2>";
}

?>