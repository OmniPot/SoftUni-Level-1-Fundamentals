<?php

$board = $_GET['board'];

// $board = "R-H-B-K-Q-B-H-R/P-P- -P-P- -P-P/ - -P- - - - - / - - - - -P- - / - - - - - - - / -P- - - - - -H/P- -P-P-P-P-P-P/R-H-B-K-Q-B- -R";

$cells = preg_split("/[\/-]+/", $board, -1);
preg_match_all("/[RHBKQP\-\/\s]/", $board, $valid);

$valid = $valid[0];

$json = [
	'Bishop' => 0,
	'Horseman' => 0,
	'King' => 0,
	'Pawn' => 0,
	'Queen' => 0,
	'Rook' => 0
];

$result = '';

if (count($cells) != 64 || count($valid) != 127) {

	$result .= "<h1>Invalid chess board</h1>";

}else{

	$result = "<table>";

	for ($i = 0; $i < 8; $i++) { 

		$result .= "<tr>";

		for ($j = $i * 8; $j < $i * 8 + 8; $j++) { 

			switch ($cells[$j]) {

				case ' ':
					$result .= "<td> </td>";
				break;

				case 'B':

				if (!isset($json['Bishop'])) {
					$json['Bishop'] = 1;
				}else{
					$json['Bishop']++;
				}
					
					$result .= "<td>B</td>";
				break;

				case 'K':

				if (!isset($json['King'])) {
					$json['King'] = 1;
				}else{
					$json['King']++;
				}
					$result .= "<td>K</td>";
				break;

				case 'Q':
				
				if (!isset($json['Queen'])) {
					$json['Queen'] = 1;
				}else{
					$json['Queen']++;
				}
					$result .= "<td>Q</td>";
				break;

				case 'P':
				
				if (!isset($json['Pawn'])) {
					$json['Pawn'] = 1;
				}else{
					$json['Pawn']++;
				}
					$result .= "<td>P</td>";
				break;

				case 'H':
				
				if (!isset($json['Horseman'])) {
					$json['Horseman'] = 1;
				}else{
					$json['Horseman']++;
				}
					$result .= "<td>H</td>";
				break;

				case 'R':
				
				if (!isset($json['Rook'])) {
					$json['Rook'] = 1;
				}else{
					$json['Rook']++;
				}
					$result .= "<td>R</td>";
				break;
			}
		}

		$result .= "</tr>";
	}

	$result .= "</table>";

	ksort($json);

	$result .= json_encode($json);
}

echo $result;

?>