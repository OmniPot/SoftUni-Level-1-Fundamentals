<?php

// $today = $_GET['today'];
// $invoices = $_GET['invoices'];
date_default_timezone_set('Europe/Sofia');

$today = '07/08/2014';
$invoices = '["11/05/2013 | Sopharma | Paracetamol | 20.54 lv", "11/05/2013 | Sopharma | Analgin | 57.45 lv", "02/12/2011 | Actavis | Aulin | 120.54 lv", "13/05/2009 | Sopharma | Tamiflu | 221.54 lv", "23/01/2014 | Actavis | Paracetamol | 7.54 lv", "11/05/2013 | Actavis | Paracetamol | 17.54 lv"]';

$pattern = "/(\d{2}\/\d{2}\/\d{4})\s+\|\s+([A-Za-z]+)\s+\|\s+([A-Za-z]+)\s*\|\s*([\d\.]+)\s*[lv]*/";

preg_match_all($pattern, $invoices, $matches);

$products = array();

for ($i = 1; $i < count($matches[0]); $i++) { 
	$product = [];
	$product['date'] = $matches[1][$i];
	$product['company'] = $matches[2][$i];
	$product['name'] = $matches[3][$i];
	$product['cost'] = floatval($matches[4][$i]);

	$products[] = $product;
}

var_dump($products);

var_dump($dates);



?>