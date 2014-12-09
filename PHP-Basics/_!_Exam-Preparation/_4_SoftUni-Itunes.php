<?php

$text = 'Krali Marko | Rock | Nakov, Joro, Pesho | 1250 | 4.8
Sladkarnica Malinka | Jazz | Pencho, Nakov, Gero | 728 | 4.3
Hvani me Minke | Rock | Kaloqn, Tosho | 1930 | 4.4
V starite Karpati | Rock | Nakov | 1029 | 4.1
Rakiichice | Rock | Ceco, Joro, Nakov, Preslav, Petya | 453 | 4.2
';

$_GET['property'] = 'genre';
$_GET['order'] = 'ascending';
$_GET['artist'] = 'Nakov';

//$text = $_GET['text'];
//$order = $_GET['order'];
//$artist = $_GET['artist'];
//$property = $_GET['property'];

$pattern = "/(\w+[\s\w]*)+\s+\|\s+(\w+[\s]*)+\s+\|\s+(\w+[\w,\s]*)+\s+\|\s+([\d]+)?\s+\|\s+([\d]+\.*[\d]*)/";
preg_match_all($pattern, $text, $properties);

$songsObjects = [];

for ($i = 0; $i < count($properties) - 1; $i += 1) {
    $song = [];
    $song['name'] = $properties[1][$i];
    $song['genre'] = $properties[2][$i];
    $song['artist'] = explode(", ", $properties[3][$i]);
    sort($song['artist'],SORT_ASC);
    $song['download'] = intval($properties[4][$i]);
    $song['rating'] = floatval($properties[5][$i]);

    if (in_array($artist, $song['artist'], true)) {
        $songsObjects[] = $song;
    }
}
if ($order == 'ascending'){
    uasort($songsObjects, function ($a, $b) {
        global $property;
        strcmp($a['name'], $b['name']) == -1 ? $nameComapare = -1 : $nameComapare = 1;
        if ($a[$property] == $b[$property]) return $nameComapare;
        return $a[$property] > $b[$property] ? 1 : -1;
    });
}else{
    uasort($songsObjects, function ($a, $b) {
        global $property;
        strcmp($a['name'], $b['name']) == 1 ? $nameComapare = -1 : $nameComapare = 1;
        if ($a[$property] == $b[$property]) return $nameComapare;
        return $a[$property] < $b[$property] ? 1 : -1;
    });
}
printTable($songsObjects);

function printTable($data)
{
    echo '<table>
<tr><th>Name</th><th>Genre</th><th>Artists</th><th>Downloads</th><th>Rating</th></tr>
';
    foreach ($data as $song) {
        echo "<tr><td>" . htmlspecialchars($song['name']) . "</td><td>" . htmlspecialchars($song['genre']) . "</td><td>" . htmlspecialchars(implode(', ', $song['artist'])) . "</td><td>" . htmlspecialchars($song['download']) . "</td><td>" . htmlspecialchars($song['rating']) . "</td></tr>
";
    }
    echo '</table>';

    return;
}

?>