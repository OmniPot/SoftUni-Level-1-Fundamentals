<head>
    <style>
        form {
            text-align: center;
            width: 400px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: 400px;
            margin: 20px auto;
        }

        textarea {
            width: 100%;
            height: 50px;
            max-width: 100%;
        }

        p {
            width: 400px;
            margin: 20px auto;
        }

    </style>
</head>

<form method="post">
    <p>Enter text below</p>
    <textarea name="text"></textarea><br/>
    <input type="text" name="bans"/><br/>
    <input type="submit" name="submit" value="Ban Words"/>
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['text'])) {
        if (isset($_POST['bans'])) {
            $text = $_POST['text'];
            $bans = preg_split("/, /", $_POST['bans'], -1, PREG_SPLIT_NO_EMPTY);
            $bans = array_map('trim', $bans);

            for ($i = 0; $i < count($bans); $i += 1) {
                $stars = '';
                for ($j = 0; $j < strlen($bans[$i]); $j += 1) {
                    $stars .= '*';
                }
                $bans[$i] = "/" . $bans[$i] . "/";
                $text = preg_replace($bans[$i], $stars, $text);
            }
            echo "<p>" . htmlentities($text) . "</p>";
        } else {
            echo "Please enter bans!";
        }
    } else {
        echo "Please enter text!";
    }
}

?>