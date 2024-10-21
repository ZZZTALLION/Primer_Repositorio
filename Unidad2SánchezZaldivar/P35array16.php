<?php
/* CBTIS 89
Programa que suma, resta, multiplica y divide números contenidos de dos arreglos.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$array1 = [10, 8, 15, 20, 40];
$array2 = [5, 3, 7, 5, 30];
//$prob = [$suma=0, $resta=0, $multi=0, $divi=0];
$longitud = count($array1);

echo "SUMA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{$prob[$i] = $array1[$i]+$array2[$i];
		echo $array1[$i], " + ",$array2[$i], " = ",$prob[$i];
		echo "<br>";}

echo "RESTA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{$prob[$i] = $array1[$i]-$array2[$i];
		echo $array1[$i], " - ",$array2[$i], " = ",$prob[$i];
		echo "<br>";}

echo "MULTIPLICACIÓN ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{$prob[$i] = $array1[$i]*$array2[$i];
		echo $array1[$i], " * ",$array2[$i], " = ",$prob[$i];
		echo "<br>";}

echo "DIVISIÓN ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{$prob[$i] = $array1[$i]/$array2[$i];
		echo $array1[$i], " / ",$array2[$i], " = ",$prob[$i];
		echo "<br>";}

?>