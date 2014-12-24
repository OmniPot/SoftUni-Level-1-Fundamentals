<?php

// $text = $_GET['text'];
// $blacklist = $_GET['blacklist'];

$text = "Hi, I'm an air-conditioner technician, so if you need any assistance you can contact me at air-conditioners@gmail.com . Secondary email: kinky_technician@yahoo.in or at naked-screwdriver@abv.bg OR pesho@dir.tk";
$blacklist = '';

preg_match_all("/(.*[^\s]+)/", $blacklist, $banslist);
$banslist = $banslist[1];

preg_match_all("/[\da-zA-Z\-\_\+]+@[\da-zA-Z\-]+\.+?[\da-zA-Z\-\.]+/", $text, $emails);
$emails = $emails[0];

for ($i = 0; $i < count($banslist); $i++) {
	$banslist[$i] = preg_replace("/\*/", "", $banslist[$i]);
	$banslist[$i] = '/' . $banslist[$i] . '/';
}

foreach ($emails as &$email) {
	$replaced = false;
	foreach ($banslist as $ban) {
		if (preg_match($ban, $email)) {
			$pattern = '/' . $email . '/';
			$replacement = str_repeat("*", strlen($email));
			$text = preg_replace($pattern, $replacement, $text);
			$replaced = true;
		}
	}
	if (!$replaced) {
		$pattern = "/" . $email . "/";
		$replacement = "<a href=\"mailto:$email\">$email</a>";
		$text = preg_replace($pattern, $replacement, $text);
	}
}

echo "<p>".$text."</p>";

?>