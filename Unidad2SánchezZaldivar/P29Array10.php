<?php
/* CBTIS 89
Programa que identifica si una cierta variable se encuentra en el array o no.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$nombre = "Sylvester";

$arraynombres = array("Keanu","Arnold", $nombre, "Hugh", "Dolph", "James", "Till");

$longitud = count($arraynombres);

for ($i=0; $i<$longitud; $i++)
	{if ($arraynombres[$i]==$nombre){
		echo "Este nombre esta en el array :333";
		echo "<br>";
	}
	else{
		echo "Este nombre no esta en el array XDDD";
		echo "<br>";
	}

	}

?>