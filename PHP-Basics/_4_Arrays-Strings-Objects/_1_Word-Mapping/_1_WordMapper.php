<head>
    <style>
        form{
            text-align: center;
            width: 400px;
            margin: 0 auto;
        }
        input[type="submit"]{
            width: 100px;
            margin: 20px auto;
        }
        textarea{
            width: 100%;
            height: 50px;
        }
        table{
            margin: 0 auto;
        }
        td{
            text-align: center;
            width: 100px;;
        }
    </style>
</head>

<form method="post">
    <textarea name="text"></textarea><br/>
    <input type="submit" name="submit"/>
    <?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['text'])) {
            $text = $_POST['text'];
            $words = preg_split('/[\W]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
            $words = array_count_values(array_map("strtolower", $words));
            echo createTable($words);
        }
    }

    function createTable($data)
    {
        $result = '';
        $result .= '<table border="1">';
        foreach ($data as $data_k => $data_v) {
            $result .= '<tr><td>' . htmlentities($data_k) . '</td>';
            $result .= '<td>'.htmlentities($data_v).'</td>';
            $result .= '</tr>';
        }
        $result .= '</table>';
        return $result;
    }

    ?>
</form>


