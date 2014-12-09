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
    if (!empty($_POST['tags'])) {
        $tags = preg_split("/[, ]/", $_POST['tags']);
        $tags = array_filter($tags);
        $newTags = array();

        foreach ($tags as $tag => $tag_value) {
            if (array_key_exists($tag_value, $newTags)) {
                $newTags[$tag_value] += 1;

            } else {
                $newTags[$tag_value] = 1;
            }
        }
        arsort($newTags);

        $bestTagCount = 0;
        $bestTagValue = '';

        foreach ($newTags as $tag => $tag_value) {
            if ($bestTagCount < $tag_value) {
                $bestTagCount = $tag_value;
                $bestTagValue = $tag;
            }
            echo htmlentities($tag) . " : " . htmlentities($tag_value) . " times" . "<br>";
        }

        echo "Most frequent tag is: " . htmlentities($bestTagValue);
    }
}

?>