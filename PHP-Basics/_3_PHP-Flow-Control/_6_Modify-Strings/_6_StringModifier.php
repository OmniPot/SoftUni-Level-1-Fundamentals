<form method="post">
    <input type="text" name="text"/>
    <input type="radio" name="option" value="palindrome"/>Check Palindrome
    <input type="radio" name="option" value="reverse"/>Reverse String
    <input type="radio" name="option" value="split"/>Split
    <input type="radio" name="option" value="hash"/>Hash String
    <input type="radio" name="option" value="shuffle"/>Shuffle String
    <input type="submit" name="submit" value="submit"/><br/>
</form>

<?php

function checkPalindrome($word)
{
    if (strrev($word) == $word) {
        return $word . " is a palindrome!";
    }
    return $word . " is not a palindrome!";
}

if (isset($_POST['submit'])) {

    if (isset($_POST['text'])) {
        $text = $_POST['text'];

        if (isset($_POST['option'])) {
            $option = $_POST['option'];

            switch ($option) {
                case "palindrome";
                    echo htmlentities(checkPalindrome($text));
                    break;
                case "reverse";
                    echo htmlentities(strrev($text));
                    break;
                case "split";
                    foreach (str_split($text) as $letter) {
                        if (ctype_alpha($letter)) {
                            echo htmlentities($letter . " ");
                        };
                    }
                    break;
                case "hash";
                    echo htmlentities(crypt($text, "rconkov"));
                    break;
                case "shuffle";
                    echo htmlentities(str_shuffle($text));
                    break;
            }

        }
    }
}

?>