<html>
<body>
<form method="post">
    <p>Enter tags:</p>
    <input type="text" name="tags" placeholder="Tags here..."/>
    <input type="submit" name="submit"/>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['tags'])) {
        $tagsArr = preg_split("/[, ]/", $_POST['tags']);
        $tagsArr = array_filter($tagsArr);
        $index = 0;
        foreach ($tagsArr as $tag) {
            echo htmlentities("$index : " . $tag) . "<br>";
            $index++;
        }
    } else {
        echo "Please enter some tags.";
    }
}

?>