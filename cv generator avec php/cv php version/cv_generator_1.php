<?php
    include_once 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cv_generator.css">
    <title> CV Genarator </title>
</head>

<body style="background-color:black">
    <h2 style="color: red "> We will start by knowing you better </h2>
    <form action="includes/personal.inc.php" method="POST">
    <div id="id1">
        <p class="label"> Full name : <input type="text" name="name"> </p>
        <p class="label"> Birth Date : <input type="text" name="birth"> </p>
        <p class="label"> Adresse <input type="text" name="addresse"> </p>
        <p class="label"> Email <input type="text" name="email"> </p>
        <p class="label"> Do you have a licence : 
            <select id ="selectBox" onchange="func1();">
                <option value="yes">Yes</option>
                <option value="no">No</option> 
            </select> 
        </p>
        <p> if yes please sepecife the kind : <input type="text" name="drive"> </p>
        <button type ="submit" class="button" > next </button>
    </div>
    </form>
    <script type="text/javascript">
        function func1(){
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        }

    </script>
</body>
</html>