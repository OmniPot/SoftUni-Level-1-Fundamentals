<?php

date_default_timezone_set('UTC');

for ($day = 1; $day <= 30; $day += 1) {

    if (date("l", mktime(0, 0, 0, date("m"), $day, date("Y"))) == 'Sunday') {
        echo date("jS F, Y", mktime(0, 0, 0, date("m"), $day, date("Y"))) . "<br>\n";
    }
}

?>