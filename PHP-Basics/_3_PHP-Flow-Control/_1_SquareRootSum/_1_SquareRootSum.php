<head>
    <style>
        table {
            border: 1px solid black;
        }

        table td {
            border: 1px solid black;
        }
    </style>
</head>
<table>
    <?php
    $sumValues = 0;
    for ($i = 0; $i <= 100; $i += 2) {
        $row = "<tr><td>$i</td><td>" . round(sqrt($i), 2) . "</td></tr>";
        $sumValues += sqrt($i);
        echo $row;
    }
    echo "<tr><td style='font-weight: bold'>Total:</td><td>" . number_format($sumValues, 2, ',', ' ') . "</td></tr>";
    ?>
</table>
