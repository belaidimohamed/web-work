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
    <h2 style="color: red "> Now we will get to know you formation </h2>
    <div id="id1">
        <form action="includes/diploma.inc.php" method="POST">
            <div id="bouga">
                <p class="label"> Please set your diplomas : </p>
                <p class="label"> Date : <input type="text" name="date_1"> </p>
                <p class="label"> diploma <input type="text" name="diploma_1"> </p>
                <p class="label"> description <input type="text" name="dec_1"> </p>
            </div>
            <div id="bouga">
                <p class="label"> Please set your diplomas  </p>
                <p class="label"> Date : <input type="text" name="date_2"> </p>
                <p class="label"> diploma <input type="text" name="diploma_2"> </p>
                <p class="label"> description <input type="text" name="dec_2"> </p>
            </div>
            <div id="bouga">
                <p class="label"> Please set your diplomas  </p>
                <p class="label"> Date : <input type="text" name="date_3"> </p>
                <p class="label"> diploma :<input type="text" name="diploma_3"> </p>
                <p class="label"> description :<input type="text" name="dec_3"> </p>
            </div>
            <button type="submit" class="button"  > next </button>
            <button class="button2" > back </button>
        </form>

    
    </div>
    <script type="text/javascript">
        function func1(){
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        }

    </script>
</body>
</html>