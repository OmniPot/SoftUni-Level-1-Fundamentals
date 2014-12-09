<head>
    <style>
        form {
            text-align: center;
            width: 500px;
            margin: 30px auto;
        }

        table {
            width: 1000px;
            margin: 0 auto;
            border: 1px solid black;
        }

        td, th {
            width: 100px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<form method="post">
    Enter number of years <input type="text" name="years"/>
    <input type="submit" name="submit" value="Show costs"/>
</form>

<table>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total</th>
    </tr>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['years'])) {

            $startYear = date('Y');
            $yearsBack = $_POST['years'];
            $range = $startYear - $yearsBack;

            while ($startYear > $range) {

                echo "<tr><td>$startYear</td>";
                $total = 0;

                for ($month = 0; $month < 12; $month += 1) {

                    $rand = rand(0, 999);
                    $total += $rand;
                    echo "<td>" . $rand . "</td>";
                }

                $startYear--;
                echo "<td>" . $total . "</td>";
                "</tr>";
            }
        }
    }

    ?>

</table>

