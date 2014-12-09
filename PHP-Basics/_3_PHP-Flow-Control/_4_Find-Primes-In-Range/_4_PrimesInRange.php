<head>
    <style>
        .bold {
            line-height: 25px;
            background: #555;
            color: #fff;
            padding: 3px;
            border-radius: 3px;
        }
    </style>
</head>

<form method="post">
    Starting Index <input type="text" name="start"/>
    End <input type="text" name="end"/>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php

function isPrime($num)
{
    if ($num > 1){
        for ($i = 2; $i <= sqrt($num); $i += 1) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    return false;
}

if (isset($_POST['start'])) {
    if ($_POST['end']) {
        $start = intval($_POST['start']);
        $end = intval($_POST['end']);

        echo "<p>";

        while ($end >= $start) {
            if (isPrime($start)) {
                echo "<span class='bold'>" . htmlentities($start) . "</span>, ";
            } else {
                echo "<span>" . htmlentities($start) . ", </span>";
            }
            $start++;
        }
        echo "</p >";
    }
}

?>