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

        input[type="submit"]{
            margin: 20px 0 10px 0;
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
    <input type="submit" name="submit" value="Replace"/>
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $patterns = ['/<\s*a\s*href/', '/\<\/a\>/', '/="/', '/">/'];
        $replacements = ['[URL', '[/URL]', '=', ']'];
        $text = preg_replace($patterns, $replacements, $text);
        echo "<p>" . htmlentities($text) . "</p>";
    }
}

?>