<?php

$errorLog = $_GET['errorLog'];

preg_match_all("/(\w+Exception):.*[\s*].*\.(\w+)\((.*):(\d+)\)/m", $errorLog, $matches);

$result = "<ul>";

for ($i = 0; $i < count($matches[0]); $i += 1) {
    $result .= "<li>line <strong>" . $matches[4][$i] . "</strong> - <strong>" . $matches[1][$i] . "</strong> in <em>" . $matches[3][$i] . ':' . $matches[2][$i] . "</em></li>";
}

$result .= "</ul>";
echo $result;

?>