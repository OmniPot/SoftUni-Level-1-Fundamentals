<?php

$inputArr = array(['Gosho', '0882-321-423', 24, 'Hadji Dimitar']);
$hearsArr = array('Name', 'Phone number', 'Age', 'Address');

echo "<table style='border-collapse: collapse; border: 1px solid black;'>";

foreach ($inputArr as $item) {
    for ($row = 0; $row < count($item); $row += 1) {
        echo "<tr>" .
            "<th style='padding: 8px;border: 1px solid black;text-align: left; background: orange;'>$hearsArr[$row]</th>" .
            "<td style='padding: 8px;border: 1px solid black;text-align: right'>$item[$row]</td>" .
            "</tr>";
    }
}

echo "<tbody>";

?>