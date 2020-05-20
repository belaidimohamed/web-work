<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cv_generator.css">
    <title> CV Genarator </title>
</head>

<body style="background-color:black">
    <h2 style="color: red "> Experience and your interests: </h2>
    <div id="id1">
        <form action="includes/final.inc.php" method="POST">
            <p class="label"> languages you know : <input type="text" name="lang"> </p>
            <p class="label"> Projects you have done   : <input type="text" name="proj"> </p>
            <p class="label"> clubs you have joined ?  <input type="text" name="club"> </p>
            
            <button type="submit" class="button"  > Save all </button>
            <button class="button2" ><a href="cv_generator_2.html"> back </button>
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
