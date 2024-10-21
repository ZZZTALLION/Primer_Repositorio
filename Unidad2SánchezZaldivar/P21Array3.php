<?php
/* CBTIS 89
Programa que almacena distintos nombres en una sola variable para luego imprimirlos en distintas columnas mediante un ciclo.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraynombres = array("Arnold", "Sylvester", "Hugh", "Dolph", "James", "Till");

//Se obtiene el número de elementos.
$longitud = count($arraynombres);

//Recorre todos los elementos.
for ($i=0; $i<$longitud; $i++)
	{//Se obtiene el valor de cada elemento.
		echo $arraynombres[$i];
		echo "<br>";}

?>