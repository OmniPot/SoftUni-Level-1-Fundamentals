<head>
    <style>
        form {
            text-align: center;
            width: 500px;
            margin: 30px auto;
        }

        table {
            width: 500px;
            margin: 0 auto;
            border: 1px solid black;
        }

        td, th {
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<form method="post">
    Enter cars <input type="text" name="cars"/>
    <input type="submit" name="submit" value="Show result"/>
</form>

<table>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>
    <?php
    $colors = ["white", "yellow", "orange", "red", "green", "blue", "purple", "brown", "grey", "black"];

    if (isset($_POST['submit'])) {
        if (isset($_POST['cars'])) {
            $cars = $_POST['cars'];
            $cars = array_filter(preg_split("/[, ]/i", $cars));

            foreach ($cars as $car) {
                echo "<tr><td>" . htmlentities($car) . "</td><td>" . $colors[rand(0, count($colors) - 1)] . "</td><td>" . rand(1, 5) . "</td></tr>";
            }
        }
    }
    ?>
</table>