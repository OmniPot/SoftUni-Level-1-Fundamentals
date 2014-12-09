<?php
//Validations
$fname = $lname = $pNumber = $cName = $cStartDate = $cEndDate = $email = $sex = $birthDate = $nationality = "";
$progLanguage = $otherLanguage = $driver = '';

if (isset($_POST['fname']) && isset($_POST['lname'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (((strlen($fname) < 2 || strlen($fname) > 20) || preg_match("/([^a-zA-Z])/", $fname)) ||
        ((strlen($lname) < 2 || strlen($lname) > 20) || preg_match("/([^a-zA-Z])/", $lname))
    ) {
        echo "Names can contain letters only and must be between 2 and 20 letters!" . "<br>";
        die;
    }
    if (isset($_POST['pnumber'])) {
        $pNumber = $_POST['pnumber'];
        if (preg_match("/([^0-9\+\-\s])/", $pNumber)) {
            echo "Phone number can contain digits, '-' and '+' only!" . "<br>";
            die;
        }
    }
    if (isset($_POST['companyName'])) {
        $cName = $_POST['companyName'];
        if (((strlen($cName) < 2 || strlen($cName)) > 20 || preg_match("/([^0-9a-zA-Z ])/", $cName))) {
            echo "Company name can contain letters and digits only!" . "<br>";
            die;
        }
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email!" . "<br>";
            die;
        }
    }
    if (isset($_POST['sex'])) {
        $sex = $_POST['sex'];
    } else {
        echo "Choose gender!";
        die;
    }
    if (isset($_POST['birthDate'])) {
        $birthDate = $_POST['birthDate'];
    } else {
        echo "Choose birth date!";
        die;
    }
    if (isset($_POST['nationality'])) {
        $nationality = $_POST['nationality'];
    } else {
        echo "Choose nationality!";
        die;
    }
    if (isset($_POST['lastWorkStartDate'])) {
        $cStartDate = $_POST['lastWorkStartDate'];
    } else {
        echo "Choose last work position start date!";
        die;
    }
    if (isset($_POST['lastWorkEndDate'])) {
        $cEndDate = $_POST['lastWorkEndDate'];
    } else {
        echo "Choose last work position end date!";
        die;
    }

    echo "<h1>" . "CV" . "</h1>";
    echo "<table><tr><td colspan='2'>Personal Information</td></tr>" .
        "<tr><td>First Name</td><td>" . htmlentities($fname) . "</td></tr>" .
        "<tr><td>Last Name</td><td>" . htmlentities($lname) . "</td></tr>" .
        "<tr><td>Email</td><td>" . htmlentities($email) . "</td></tr>" .
        "<tr><td>Phone Number</td><td>" . htmlentities($pNumber) . "</td></tr>" .
        "<tr><td>Gender</td><td>" . htmlentities($sex) . "</td></tr>" .
        "<tr><td>Birth Date</td><td>" . htmlentities($birthDate) . "</td></tr>" .
        "<tr><td>Nationality</td><td>" . htmlentities($nationality) . "</td></tr>" .
        "</table>";

    echo "<table><tr><td colspan='2'>Last Work Position</td></tr>" .
        "<tr><td>Company Name</td><td>" . $cName . "</td></tr>" .
        "<tr><td>From</td><td>" . $cStartDate . "</td></tr>" .
        "<tr><td>To</td><td>" . $cEndDate . "</td></tr>" .
        "</table>";


    echo "<table>" . "<tr><td colspan='2'>Computer Skills</td></tr><tr><td>Programming Languages</td><td><table>
                        <tr><td>Language</td><td>Skill Level</td></tr>";
    if (isset($_POST['progLanguage'])) {
        $progLanguage = $_POST['progLanguage'];
        for ($i = 0; $i < count($progLanguage); $i += 1) {
            echo "<tr><td>" . htmlentities($progLanguage[$i]) . "</td>";
            echo "<td>" . $_POST['level'][$i] . "</td></tr>";
        }
        echo "</table>
                </td>
            </tr>
        </table>";
    } else {
        echo "Please enter programming languages!";
        die;
    }

    echo "<table>" . "<tr><td colspan='2'>Other Skills</td></tr><tr><td>Languages</td><td><table>
                        <tr><td>Language</td><td>Comprehansion</td><td>Reading</td><td>Writing</td></tr>";

    if (isset($_POST['otherLanguage'])) {
        $otherLanguage = $_POST['otherLanguage'];
        for ($i = 0; $i < count($otherLanguage); $i += 1) {
            echo "<tr><td>" . htmlentities($otherLanguage[$i]) . "</td>";
            echo "<td>" . $_POST['comprehansion'][$i] . "</td>";
            echo "<td>" . $_POST['reading'][$i] . "</td>";
            echo "<td>" . $_POST['writing'][$i] . "</td></tr>";
        }
    } else {
        echo "Please enter other languages!";
        die;
    }

    echo "</table></td></tr><tr>
            <td>Driver's license</td><td>";

    if (isset($_POST['driver'])) {
        foreach ($_POST['driver'] as $license) {
            echo $license . ", ";
        }
        echo "</td>";
    }

    echo "</tr>" . "</table>";
}

?>