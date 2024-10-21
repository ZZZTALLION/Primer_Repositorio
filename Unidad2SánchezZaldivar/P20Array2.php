<?php
/* CBTIS 89
Programa que almacena distintos valores en una sola variable para luego imprimirlos en distintas columnas.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$nombre = "Sylvester Stallone";
$array = array(1, 2, 3, "casa ", $nombre);

//Se obtiene el número de elementos.
$longitud = count($array);

//Recorre todos los elementos.
for ($i=0; $i<$longitud; $i++)
	{//Se obtiene el valor de cada elemento.
		echo $array[$i];
		echo "<br>";
		
	}

?>