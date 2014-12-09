<?php

//$list = "Java is an object-oriented programming language.
//    PHP is a server-side scripting language.
//    HTML is the standard markup language used to create web pages.
//
//    To define a table in HTML use <table>, <td> and <tr> tags.
//";
//$maxSize = 50;

$maxSize = $_GET['maxSize'];
$list = $_GET['list'];

preg_match_all("/(.*[^\s])/", $list, $list);
$result = "<ul>";


for ($i = 0; $i < count($list[1]); $i += 1) {
    $list[1][$i] = trim($list[1][$i]);
    if (strlen($list[1][$i]) > $maxSize) {
        $list[1][$i] = substr($list[1][$i], 0, $maxSize);
        $list[1][$i] .= "...";
        $result .= "<li>" . htmlspecialchars($list[1][$i]) . "</li>";
    } else {
        $result .= "<li>" . htmlspecialchars($list[1][$i]) . "</li>";
    }
}
$result .= "</ul>";
echo $result;
?>