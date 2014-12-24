<?php

$table = $_GET['jsonTable'];

$table = json_decode($table);

$words = $table[0];

if ($table[0][0] == "") {
	echo "<table border='1' cellpadding='5'><tr><td></td></tr></table>";
	exit();
}

$tableCols = max(array_map('strlen', $words));

$keys = $table[1];
$key1 = $table[1][0];
$key2 = $table[1][1];
$m = 26;

$result = "<table border='1' cellpadding='5'>";
for ($i = 0; $i < count($words); $i++){
	$result .= "<tr>";
	$words[$i] = str_pad($words[$i], $tableCols);
	for ($j = 0; $j < $tableCols; $j++) { 
		if (ctype_alpha($words[$i][$j])) {
			$letter = strtoupper($words[$i][$j]);
			$position = ord($letter) - 65;
			$result .= "<td style='background:#CCC'>" . htmlspecialchars(formulae($key1, $key2, $position, $m)) . "</td>";
		} else if(preg_match("/\s+/", $words[$i][$j])){
			$result .= "<td></td>";
		}
		else{
			$result .= "<td style='background:#CCC'>" . htmlspecialchars($words[$i][$j]) . "</td>";
		}
	}
	$result .= "</tr>";
}
$result .= "</table>";

echo $result;

function formulae($k, $s, $x, $m){
	return chr((($k * $x + $s) % $m) + 65);
}

?>