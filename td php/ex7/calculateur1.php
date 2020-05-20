<!DOCTYPE html>
<html>
<head>
	<title> caluclateur de matrice </title>
</head>
<body>
<fieldset style="margin-left: 225px;margin-right: 200px;">
	<legend>calculateur matrice</legend>
	<div style="margin-left: 250px;margin-top: 50px;margin-bottom: 50px;">
		<form action="script.php" method="POST" onsubmit="return validation()">
			matrice : <input type="text" id="matrice" name="matrice"> <br><br>
			<div>
				<input type="submit" value="inverse" name="inverse">
				<input type="submit" value="transposé" name="transposé">
				<input type="submit" value="déterminant" name="déterminant">
				<input type="submit" value="trace" name="trace">
			</div>
			<p id="champ">
				<strong><?php if(isset($_GET['res']))
								 echo "le ".$_GET['type']." de la matrice entrée est: ".$_GET['res']; 
						?>
				</strong>
			</p>
		</form>
	</div>
</fieldset>
<dialog id="valid">
	  <p>  la matrice careé d'ordre 2, et doit etre de la forme : a;b;c;d; </p> 
</dialog>
<script type="text/javascript">
	function validation(){
		ch=document.getElementById("matrice").value;
		ch1=document.getElementById("valid");
		if(ch.length!=8){ch1.showModal();return false;}
		for (var i = 0 ; i<ch.length; i=i+2) {
			if(!( isNaN(ch[i]) ) && (ch[i+1]==';')) {continue;}
			else {alert("dont work");ch1.showModal();return false;}
		}
		
		return true;
	}
</script>
</body>
</html>