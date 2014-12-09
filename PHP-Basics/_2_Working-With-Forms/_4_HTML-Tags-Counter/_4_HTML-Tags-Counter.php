<html>
<body>
<form method="post">
    <p>Enter HTML tag:</p>
    <input type="text" name="tag"/>
    <input type="submit" name="submit"/>
</form>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if (!isset($_SESSION['entered[]'])) {
    $_SESSION['entered[]'] = array();
}

$validTagsArr = array("DOCTYPE", "a", "abbr", "acronym", "address", "applet", "area", "article", "aside", "audio",
    "b", "base", "basefont", "bdi", "bdo", "big", "blockquote", "body", "br", "button", "canvas", "caption", "center", "cite",
    "code", "col", "colgroup", "datalist", "dd", "del", "details", "dfn", "dialog", "dir", "div", "dl", "dt", "em", "embed", "fieldset",
    "figcaption", "figure", "font", "footer", "form", "frame", "frameset", "head", "header", "hgroup", "h1", "h2", "h3", "h4", "h5", "h6", "hr", "html",
    "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label", "legend", "li", "link", "main", "map", "mark", "menu", "menuitem",
    "meta", "meter", "nav", "noframes", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
    "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strike", "strong", "style",
    "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "tt",
    "u", "ul", "var", "video", "wbr");

if (isset($_POST['submit'])) {
    $tag = $_POST['tag'];
    if (isset($tag) && in_array($tag, $validTagsArr, true)
        && !in_array($tag, $_SESSION['entered[]'], true)
    ) {
        echo "<h1>" . "Valid HTML Tag!" . "</h1>";
        $_SESSION['count']++;
        $_SESSION['entered[]'][] = $tag;
    } else {
        echo "<h1>" . "Invalid HTML Tag!" . "</h1>";
    }
}

echo "<h1>" . "Valid tags: " . " </h1 > ";

foreach ($_SESSION['entered[]'] as $item) {
    echo "<span>" . htmlentities($item) . ", " . "<span>";
}

echo "<h1 > " . "Score: " . htmlentities($_SESSION['count']) . "</h1 > ";
?>