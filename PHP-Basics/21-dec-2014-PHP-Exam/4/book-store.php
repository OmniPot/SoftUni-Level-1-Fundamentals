<?php

date_default_timezone_set("Europe/Sofia");

$list = $_GET['text'];
$minPrice = $_GET['min-price'];
$maxPrice = $_GET['max-price'];
$sort = $_GET['sort'];
$order = $_GET['order'];

$lines = preg_split("/[\r\n]+/", $list ,-1, PREG_SPLIT_NO_EMPTY);

$books = [];

for ($i = 0; $i < count($lines); $i++) { 

	$line = preg_split('/\//', $lines[$i]);

	$book = [];
	$book['author'] = $line[0];
	$book['name'] = $line[1];
	$book['genre'] = $line[2];
	$book['publish-date'] = strtotime($line[4]);
	$book['date'] = $line[4];
	$book['info'] = $line[5];

	if (floatval($line[3]) <= $maxPrice && $line[3] >= $minPrice) {
		$book['price'] = floatval($line[3]);
		$books[] = $book;
	}
}
usort($books, function($a, $b) use ($order, $sort){

	if ($a[$sort] == $b[$sort]) {
		return $a['publish-date'] - $b['publish-date'];
	}
	if ($order == 'ascending') {
		return $a[$sort] > $b[$sort] ? 1 : -1;
	}else{
		return $a[$sort] < $b[$sort] ? 1 : -1;
	}
		
});

$result = '';

foreach ($books as $book) {
	$result .= '<div>';
	$result .= '<p>' . htmlspecialchars($book['name']) . '</p>';
	$result .= '<ul>';
	$result .= '<li>' . htmlspecialchars($book['author']) . '</li>';
	$result .= '<li>' . htmlspecialchars($book['genre']) . '</li>';
	$result .= '<li>' . number_format(htmlspecialchars($book['price']), 2, ".", '') . '</li>';
	$result .= '<li>' . htmlspecialchars($book['date']) . '</li>';
	$result .= '<li>' . htmlspecialchars($book['info']) . '</li>';
	$result .= '</ul>';
	$result .= '</div>';
}

echo $result;

?>