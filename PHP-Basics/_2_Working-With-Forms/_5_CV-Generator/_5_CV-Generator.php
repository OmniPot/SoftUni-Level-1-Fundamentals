<html>
<head>
    <style>
        table {
            margin: 10px;
        }

        table, table td {
            border: 1px solid black;
        }

        table tr:first-child > td {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<script>
    function addProgBox() {
        var newDiv = document.createElement("div");
        newDiv.innerHTML =
            "<input type=\"text\" name=\"progLanguage[]\"/>" +
            "<select name=\"level[]\">" +
            "<option value=\"Beginner\">Beginner</option>" +
            "<option value=\"Advanced\">Advanced</option>" +
            "<option value=\"Expert\">Expert</option>" +
            "<option value=\"Ninja\">Ninja</option>" +
            "</select><br/>";
        document.getElementById('progParent').appendChild(newDiv);
    }

    function removeProgBox() {
        var progBox = document.getElementById('progParent');
        progBox.removeChild(progBox.lastChild);
    }

    function addOtherBox() {
        var newDiv = document.createElement("div");
        newDiv.innerHTML =
            "<input type=\"text\" name=\"otherLanguage[]\"/>" +
            "<select name=\"comprehansion[]\">" +
            "<option value=\"Beginner\">Beginner</option>" +
            "<option value=\"Advanced\">Advanced</option>" +
            "<option value=\"Expert\">Expert</option>" +
            "</select>" +
            "<select name=\"reading[]\">" +
            "<option value=\"Beginner\">Beginner</option>" +
            "<option value=\"Advanced\">Advanced</option>" +
            "<option value=\"Expert\">Expert</option>" +
            "</select>" +
            "<select name=\"writing[]\">" +
            "<option value=\"Beginner\">Beginner</option>" +
            "<option value=\"Advanced\">Advanced</option>" +
            "<option value=\"Expert\">Expert</option>" +
            "</select><br/>";
        document.getElementById('otherParent').appendChild(newDiv);
    }

    function removeOtherBox() {
        var otherBox = document.getElementById('otherParent');
        otherBox.removeChild(otherBox.lastChild);
    }
</script>

<form method="post" style="width: 500px">
    <fieldset name="personalInfo">
        <legend>Personal Information</legend>
        <input type="text" name="fname" placeholder="First Name"/><br/>
        <input type="text" name="lname" placeholder="Last Name"/><br/>
        <input type="email" name="email" placeholder="Email"/><br/>
        <input type="text" name="pnumber" placeholder="Phone Number"/><br/>
        Female <input type="radio" name="sex" value="Female"/>
        Male <input type="radio" name="sex" value="Male"/><br/>
        <label>Birth Date</label><br/>
        <input type="text" name="birthDate" placeholder="dd/mm/yyyy"/><br/>
        <label>Nationality</label><br/>

        <select name="nationality">
            <option value="Bulgarian">Bulgaria</option>
            <option value="American">American</option>
            <option value="English">English</option>
            <option value="Swedish">Swedish</option>
            <option value="Turkish">Turkish</option>
            <option value="French">French</option>
            <option value="German">German</option>
            <option value="Spain">Spain</option>
            <option value="Norwegian">Norwegian</option>
            <option value="Danish">Danish</option>
        </select>
    </fieldset>

    <fieldset name="lastWorkPosition">
        <legend>Last Work Position</legend>
        Company Name <input type="text" name="companyName"/><br/>
        From <input type="text" name="lastWorkStartDate" placeholder="dd/mm/yyyy"/><br/>
        To <input type="text" name="lastWorkEndDate" placeholder="dd/mm/yyyy"/><br/>
    </fieldset>

    <fieldset name="computerSkills">
        <legend>Computer Skills</legend>
        <label>Programming Languages</label><br/>

        <div id="progParent">
            <!--JS HERE-->
        </div>

        <input type="button" value="Remove Language" onclick="removeProgBox()"/>
        <input type="button" value="Add Language" onclick="addProgBox()"/>
    </fieldset>

    <fieldset name=" otherSkills">
        <legend>Other Skills</legend>
        <label>Languages</label><br/>

        <div id="otherParent">
            <!--JS Here-->
        </div>

        <input type="button" value="Remove Language" onclick="removeOtherBox()"/>
        <input type="button" value="Add Language" onclick="addOtherBox()"/><br/>

        <label>Driver's License</label><br/>
        B <input type="checkbox" value="B" name="driver[]"/>
        A <input type="checkbox" value="A" name="driver[]"/>
        C <input type="checkbox" value="C" name="driver[]"/>
    </fieldset>

    <input type="submit" name="submit" value="Generate CV"/>
</form>

</body>
</html>

<?php

if (isset($_POST['submit'])) {
    require 'FormCreator.php';
}

?>