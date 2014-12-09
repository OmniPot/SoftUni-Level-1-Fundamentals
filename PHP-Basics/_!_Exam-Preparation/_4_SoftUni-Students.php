<?php

$students = $_GET['students'];
$order = $_GET['order'];
$column = $_GET['column'];

preg_match_all("/(.*),\s(.*),\s(online|onsite), (\d+)/", $students, $objects);

$studentsList = [];
$ids = 1;

for ($i = 0; $i < count($objects[0]); $i += 1) {

    $student = new stdClass();
    $student->id = $ids;
    $student->username = $objects[1][$i];
    $student->email = $objects[2][$i];
    $student->type = $objects[3][$i];
    $student->result = $objects[4][$i];
    $studentsList[] = $student;
    $ids++;
}

//SORT STUDENTS

if ($order == 'ascending') {
    usort($studentsList, function ($a, $b) {
        global $column;
        if ($a->$column == $b->$column) {
            return $a->id > $b->id;
        }
        return $a->$column > $b->$column;
    });
} else {
    usort($studentsList, function ($a, $b) {
        global $column;
        if ($a->$column == $b->$column) {
            return $a->id < $b->id;
        }
        return $a->$column < $b->$column;
    });
}

//PRINT THE TABLE

echo '<table><thead><tr><th>Id</th><th>Username</th><th>Email</th><th>Type</th><th>Result</th></tr></thead>';
foreach ($studentsList as $student) {
    echo "<tr><td>" . $student->id . "</td><td>" . htmlspecialchars($student->username) . "</td><td>" . htmlspecialchars($student->email) . "</td><td>" . htmlspecialchars($student->type) . "</td><td>" . htmlspecialchars($student->result) . "</td></tr>";
}
echo '</table>';

?>