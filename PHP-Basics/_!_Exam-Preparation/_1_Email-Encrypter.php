<?php

$recipient = $_GET['recipient'];
$subject = $_GET['subject'];
$key = $_GET['key'];
$body = $_GET['body'];

$email = "<p class='recipient'>" . $recipient . "</p><p class='subject'>" . $subject . "</p><p class='message'>" . $body . "/p>";

for ($i = 0, $j = 0; $i < strlen($email); $i += 1) {
    $ascii = ord($email[$i]) * ord($key[$j]);
    $asciiToHex = dechex($ascii);
    echo '|' . $asciiToHex;
    if ($j == strlen($key) - 1) {
        $j = 0;
    } else {
        $j++;
    }
}
echo '|';

?>