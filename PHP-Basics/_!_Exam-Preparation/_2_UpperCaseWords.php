<?php

//$text = $_GET['text'];

$text = 'Companies like
    HP, ORACLE and IBM target their platforms for cloud-based environment.
    IList<T> implements IEnumerable<T>. GoPHP is a PHP5 library.
';

preg_match_all("/[^A-Za-z]([A-Z]+)[^A-Za-z]/", $text, $matches);



?>