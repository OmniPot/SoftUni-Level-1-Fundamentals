<head>
    <style>
        .odd {
            color: blue;
        }

        .even {
            color: red;
        }

        form {
            text-align: center;
            width: 400px;
            margin: 0 auto;
        }

        input[type="submit"] {
            width: 100px;
            margin: 20px auto;
        }

        textarea {
            width: 100%;
            height: 50px;
            max-width: 100%;;
        }

        table {
            margin: 0 auto;
        }

        td {
            text-align: center;
            width: 100px;;
        }
    </style>
</head>

<form method="post">
    <textarea name="text"></textarea><br/>
    <input type="submit" name="submit" value="Color Text"/>
    <?php
    if (isset($_POST['submit']))
        if (isset($_POST['text'])) {
            $text = $_POST['text'];

            $letters = preg_split("//", $text, -1, PREG_SPLIT_NO_EMPTY);

            $result = '<p>';
            for ($i = 0; $i < count($letters); $i += 1) {

                if (ord($letters[$i]) % 2 == 0) {
                    $result .= '<span class="even">' . htmlentities($letters[$i]) . '</span> ';
                } else {
                    $result .= '<span class="odd">' . htmlentities($letters[$i]) . '</span> ';
                }

            }
            $result .= '</p>';
            echo $result;
        }
    ?>
</form>