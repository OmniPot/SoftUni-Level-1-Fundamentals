<head>
    <style>
        form {
            width: 500px;
            margin: 0 auto;
        }
        input {
            width: 200px;
            margin: 30px auto;
        }
        table, td {
            width: 400px;
            margin: 0 auto;
            border: 1px solid black;
        }
    </style>
</head>

<form method="post">
    Input string: <input type="text" name="string"/>
    <input type="submit" name="submit"/>
</form>

<table>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['string'])) {
            $numbersArr = preg_split("/, /", $_POST['string']);
            foreach ($numbersArr as $numStr) {
                echo "<tr><td>" . htmlentities($numStr) . "</td>";
                $num = intval($numStr);
                if (intval($num)) {
                    $sumOfDigits = 0;
                    for ($j = 0; $j < strlen($numStr); $j += 1) {
                        $sumOfDigits += intval($numStr[$j]);
                    }
                    echo "<td>" . $sumOfDigits . "</td>";
                } else {
                    echo "<td>I cannot sum that</td>";
                }
                echo "</tr>";
            }
        }
    }
    ?>
</table>
