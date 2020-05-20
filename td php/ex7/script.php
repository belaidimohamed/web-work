<?php 

	/*--------------------------------------- conversion ---------------------------------------------------*/
	$mat=$_POST['matrice'];
	$tab = array(array($mat[0],$mat[2]), array($mat[4],$mat[6]));

	/* --------------------------------------- inversion ---------------------------------------------------*/
	function inversion($tab) 
	{	$a=$tab[0][0];$b=$tab[1][0];
		$c=$tab[0][1];$d=$tab[1][1];
		$x=$a*$d - $b*$c;
		if($x!=0){
			$tab[0][0]=$d/$x;
			$tab[0][1]=($c*-1)/$x;
			$tab[1][0]=($b*-1)/$x;
			$tab[1][1]=$a/$x;
		}else { echo "la matrice n'est pas inversible !";}
		return $tab;
	}
	/*-------------------------------------- determinant ------------------------------------------------*/
	function determiant($tab){
		return $tab[0][0]*$tab[1][1]-$tab[1][0]*$tab[0][1];
	}

	/*---------------------------------------- trace ----------------------------------------------------*/
	function trace($tab){
		return $tab[0][0]+$tab[1][1];
	}
	/*-------------------------------------- transposé -------------------------------------------------*/
	function transposé($tab){
		$x=$tab[1][0];
		$tab[1][0]=$tab[0][1];
		$tab[0][1]=$x;
		return $tab ;
	}
	/*-------------------------------------- affichage ------------------------------------------------*/
	function affiche($tab) {
	    $x="";
		for ($i=0; $i<2; $i++) { 
		for($j=0; $j<2; $j++)
			$x=$x.$tab[$i][$j].' | ';}
		return $x;
	}
	/*-------------------------------------- returning data back --------------------------------------*/

	if (isset($_POST['inverse'])) {
    	$tab=inversion($tab);
    	$x=affiche($tab);
    	header("Location: calculateur1.php?res=$x&type=inverse");
    }
    if (isset($_POST['trace'])) {
    	$x=trace($tab);
    	header("Location: calculateur1.php?res=$x&type=trace");
    }
    if (isset($_POST['déterminant'])) {
    	$x=determiant($tab);
    	header("Location: calculateur1.php?res=$x&type=détermiant");
    }
    if (isset($_POST['transposé'])) {
    	$tab=transposé($tab);
    	$x=affiche($tab);
    	header("Location: calculateur1.php?res=$x&type=transposé");
    }

	/*---------------------------------------------end------------------------------------------------------*/	
 ?>