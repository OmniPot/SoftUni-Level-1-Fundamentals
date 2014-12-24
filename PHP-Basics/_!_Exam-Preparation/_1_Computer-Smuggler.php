<?php

$list = $_GET['list'];

$partsArr = preg_split("/, /", $list, -1, PREG_SPLIT_NO_EMPTY);

$assoc = $payments = [
	'CPU' => 0,
	'RAM' => 0,
	'ROM' => 0,
	'VIA' => 0
];

$totalPaid = 0;

$partsLeft = 0;

$moneyFromParts = 0;

foreach ($partsArr as $part) {

	if (isset($assoc[$part])) {
		$assoc[$part]++;
	}else{
		$assoc[$part] = 1;
	}

	if (isset($payments[$part])) {
		switch ($part) {
			case 'CPU':
				$payments[$part] += 85;
			break;
			case 'ROM':
				$payments[$part] += 45;
			break;
			case 'RAM':
				$payments[$part] += 35;
			break;
			case 'VIA':
				$payments[$part] += 45;
			break;
		}
	} else {
		switch ($part) {
			case 'CPU':
				$payments[$part] = 85;
			break;
			case 'ROM':
				$payments[$part] = 45;
			break;
			case 'RAM':
				$payments[$part] = 35;
			break;
			case 'VIA':
				$payments[$part] = 45;
			break;
		}
	}
}

foreach ($assoc as $part => $count) {
	if ($count >= 5) {
		$totalPaid += $payments[$part] / 2;
	}else{
		$totalPaid += $payments[$part];
	}
}

if (count($assoc) < 4) {
	$pcsBuilt = 0;
}else{
	$pcsBuilt = min(array_values($assoc));
}

$moneyFromPcs = 420 * $pcsBuilt;

foreach ($assoc as $part => $count) {
	$assoc[$part] -= $pcsBuilt;
	$notSold[$part] = $assoc[$part];
	$partsLeft += $assoc[$part];
}

$moneyFromParts = 0;

foreach ($notSold as $part => $count) {

	switch ($part) {
		case 'CPU':
			$moneyFromParts += 42.5 * $count;
			break;
		case 'ROM':
			$moneyFromParts += 22.5 * $count;
		break;
		case 'RAM':
			$moneyFromParts += 17.5 * $count;
				break;
		case 'VIA':
			$moneyFromParts += 22.5 * $count;
			break;
		default:
			break;
	}
}

$balance = $moneyFromParts + $moneyFromPcs - $totalPaid;

if ($balance <= 0) {
	$balance = abs($balance);
	echo "<ul><li>$pcsBuilt computers assembled</li><li>$partsLeft parts left</li></ul><p>Nakov lost $balance leva</p>";
}else{
	echo "<ul><li>$pcsBuilt computers assembled</li><li>$partsLeft parts left</li></ul><p>Nakov gained $balance leva</p>";
}


?>