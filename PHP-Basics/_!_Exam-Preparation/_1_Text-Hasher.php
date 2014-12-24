<?php

// $text = $_GET['text'];
// $hashValue = $_GET['hashValue'];
// $fontSize = $_GET['fontSize'];
// $style = $_GET['style'];

$text = 'Warning: Our encryption is unbreakable and you will not be able to decrypt your information!';
$hashValue = 1;
$fontSize = 30;
$fontStyle = 'bold';

$letters = str_split($text);
$text = '';

foreach ($letters as $letter) {

	$asciiPos = ord($letter);

	if ($asciiPos % 2 == 0) {
		echo 'Even ' . $asciiPos. '<br>';
		$asciiPos += $hashValue;
	}else{
		echo 'Odd ' . $asciiPos. '<br>';
		$asciiPos -= $hashValue;
	}
	echo 'New asciiPos: '. $asciiPos ."<br>";
	echo 'Changed to: ' . chr($asciiPos). '<br>';
	$text .= chr($asciiPos);

}

if ($fontStyle == "normal" || $fontStyle == "italic") {
	$paragraph = "<p style=\"font-size:$fontSize;font-style:$style;\">$text</p>";
}else{
	$paragraph = "<p style=\"font-size:$fontSize;font-weight:$style;\">$text</p>";
}
echo $paragraph;
?>