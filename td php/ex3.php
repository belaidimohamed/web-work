<?php
	function factoriel($n){
		$f=1 ;
		for($j=1; $j<$n+1; $j++)
			$f=$f*$j;
		
		return $f ;
	}
	function somme($a,$n,$d){
		$s= pow($a,3*$n+2)/factoriel($n);
		return round($s,$d);
	}
	echo "<h3> Le Vn(1) avec n = 3 : </h3>";
	echo(somme(1,3,2));
 ?>