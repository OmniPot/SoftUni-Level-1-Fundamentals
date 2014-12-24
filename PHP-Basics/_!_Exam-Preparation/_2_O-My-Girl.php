<?php

$text = $_GET['text'];
$key = $_GET['key'];

$pattern = '';
$half = '';

for ($i = 1; $i < strlen($key) - 1; $i++) { 
	if (ctype_lower($key[$i])) {
		$half .= '[a-z]*';
	}else if(ctype_upper($key[$i])){
		$half .= '[A-Z]*';
	}else if(ctype_digit($key[$i])){
		$half .= '[0-9]*';
	}else{
		$half .= $key[$i];
	}
}

$pattern = '/' . '\s*' . $key[0] . '\s*' . $half . $key[strlen($key) - 1] . '(.{2,6})' . $key[0] . $half . '\s*' . $key[strlen($key) - 1] . '\s*' . '/';

preg_match_all($pattern, $text, $matches);

$matches = $matches[1];

$result = join("", $matches);

echo $result;

?>