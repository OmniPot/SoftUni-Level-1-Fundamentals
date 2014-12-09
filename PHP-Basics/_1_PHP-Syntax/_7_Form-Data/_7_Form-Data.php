<html>
<body>

<form action="_7_Form-Data.php" method="post">
    <input type="text" name="name" placeholder="Name..."><br>
    <input type="text" name="age" placeholder="Age..."><br>
    <input type="radio" name="radio" value="male"/>Male<br>
    <input type="radio" name="radio" value="female"/>Female<br>
    <input type="submit" name="submit""><br>
    <br>
</form>

<?php

$nameWarning = 'Please enter valid name!';
$ageWarning = 'Please enter valid age!';
$genderWarning = 'Please choose a gender!';

if (isset($_POST['submit'])) {
    if (isset($_POST["name"]) && !empty($_POST["name"]) && !is_numeric($_POST["name"])) {
        $name = $_POST['name'];
        echo "<br><span>My name is " . htmlentities($name) . ". </span><br>";
    } else {
        echo "<br>" . $nameWarning . "<br>";
    }
    if (isset($_POST["age"]) && is_numeric($_POST["age"])) {
        $age = htmlentities($_POST['age']);
        echo "<br><span>I am " . htmlentities($age) . " years old. </span><br>";
    } else {
        echo "<br>" . $ageWarning . "<br>";
    }
    if (isset($_POST['radio'])) {
        $gender = htmlentities($_POST['radio']);
        echo "<br><span>I am a " . htmlentities($gender) . ".</span><br>";
    } else {
        echo "<br>" . $genderWarning . "<br>";
    }
}

?>


</body>
</html>
