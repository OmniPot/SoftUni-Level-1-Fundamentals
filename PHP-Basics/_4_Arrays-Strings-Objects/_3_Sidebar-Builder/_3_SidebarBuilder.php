<head>
    <style>
        input{
            margin: 5px;
        }
        aside {
            vertical-align: top;
            display: inline-block;
            font: 16px Tahoma, Arial, sans-serif;
            background: -webkit-linear-gradient(top left, #666, #bbb);
            width: 200px;
            margin: 2%;
            padding: 1%;
            text-align: center;
            box-shadow: 2px 2px 5px #000;
            border-radius: 5px;
        }

        ul {
            list-style: none;
            text-align: center;
            width: 40%;
            margin: 0 auto;
            padding: 0;
        }

        li {
            padding: 10px 0;
        }

        a {
            color: #fff;
            text-decoration: none;
            transition:all .2s ease-in-out;
        }
        a:hover{
            font-weight: bold;
            color: #000;
        }
    </style>
</head>

<form method="post">
    Categories: <input type="text" name="categories"/><br/>
    Tags: <input type="text" name="tags"/><br/>
    Months: <input type="text" name="months"/><br/>
    <input type="submit" name="submit" value="Generate"/>
</form>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['categories'])) {
        echo genSidebar($_POST['categories'], "Categories");
    }
    if (isset($_POST['tags'])) {
        echo genSidebar($_POST['tags'], "Tags");
    }
    if (isset($_POST['months'])) {
        echo genSidebar($_POST['months'], "Months");
    }
}

function genSideBar($arr, $header)
{
    $values = preg_split("/, /", $arr, -1, PREG_SPLIT_NO_EMPTY);
    $result = '<aside><header><h1>' . $header . '</h1></header><section><ul>';
    for ($i = 0; $i < count($values); $i += 1) {
        $result .= '<li><a href=\'#\'>' . $values[$i] . '</a></li>';
    }

    $result .= '</ul></section></aside>';
    return $result;
}

?>
