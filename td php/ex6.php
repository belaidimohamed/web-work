<?php
$chaine1= "Paris" ;
$chaine2="London" ;
function message ($ch1,$ch2)
{

$chaine1 = "Je suis actuellement à $ch1" ;
$chaine2 = "Rome" ;
global $variable1 ;
global $variable2 ;
$ch2 = "$variable1 je serai $ch2 pour $variable2" ;
$variable2 = "nnnnnnnn !" ;
return array ($chaine1,$ch2) ;
}
$variable1 = "La semaine prochaine, ";
$variable2 = "présenter un papier dans une conférence internationale" ;
$montab = message ($chaine1,"à Barcelone") ;
echo $montab[0] . "<br/>" ;
echo $chaine1 . "<br/>" ;
echo $montab[1] . "<br/>" ;
$variable1 = "Dans deux semaines, ";
$variable2 = "les vacances " ;
$montab = message ($chaine2,"aux Maldives") ;
echo $montab[0] . "<br/>" ;
echo $chaine2 . "<br/>" ;
echo $montab[1] . "<br/>" ;
echo $variable2 ;
?>