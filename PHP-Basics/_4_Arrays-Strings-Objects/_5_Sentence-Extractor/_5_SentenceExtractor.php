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
    <input type="text" name="word"/><br/>
    <input type="submit" name="submit" value="Extract"/>
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['text'])) {
        if (isset($_POST['word'])) {
            $text = $_POST['text'];
            $word = $_POST['word'];
            preg_match_all("/[A-Z].*?[!.?]+/", $text, $sentences);
            $result = '';
            for ($i = 0; $i < count($sentences[0]); $i += 1) {
                if (preg_match("/\\b$word\\b/", $sentences[0][$i], $containing)) {
                    $result .= $sentences[0][$i] . " <br>";
                }
            }
            echo "<p>Sentences containing " . $word . " are:</p>";
            echo "<p>" . $result . "</p>";
        }
    }
}

?>