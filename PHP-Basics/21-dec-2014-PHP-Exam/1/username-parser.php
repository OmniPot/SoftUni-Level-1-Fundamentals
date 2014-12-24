<?php

$list = $_GET['list'];
$length = $_GET['length'];
$show = $_GET['show'];

$names = preg_split('/\n/', $list ,-1 ,PREG_SPLIT_NO_EMPTY);

$result = '<ul>';

foreach ($names as $name) {
	if ($name != "") {
		$trimmed = trim($name);
		if (strlen($trimmed) >= $length) {
			$result .= '<li>' . htmlspecialchars($trimmed) . '</li>';
		}else{
			if (isset($_GET['show'])) {
				$result .= '<li style="color: red;">' . htmlspecialchars($trimmed) . '</li>';
			}
		}
	}
}

$result .= '</ul>';

echo $result;

?>