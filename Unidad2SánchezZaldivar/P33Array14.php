<?php
/* CBTIS 89
Programa que imprime nombres contenidos en un arreglo, posteriormente se eliminan dos de estos nombres y se agregan cuatro nuevos para finalmente ordenarlos de modo ascendente y descendente.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraynombres = array("Sylvester ", "Arnold ", "Till ", "Hugh ", "Anthony ", "Keanu ");
$longitud = count($arraynombres);

echo "DATOS DEL ARREGLO ORDENADOS DE FORMA ACENDENTE POR MEDIO DE UN CICLO FOR";
		echo "<br>";
		echo "<br>";
for ($i=0; $i<$longitud; $i++)
	{	sort($arraynombres);
		echo $arraynombres[$i];
		echo "<br>";
	}
	echo "<br>";

echo "POSTERIORMENTE SE AGREGARON CUATRO DATOS Y SE ELIMINARON DOS";
		echo "<br>";
		echo "<br>";

array_push($arraynombres, "Pablo ", "Tere ", "Luis ", "Jazmín");
unset($arraynombres [5]);
unset($arraynombres [2]);
$longitud = count($arraynombres);

echo "DATOS DEL ARREGLO ORDENADOS DE FORMA DECENDENTE POR MEDIO DE UN CICLO FOR";
echo "<br>";
echo "<br>";

for ($i=0; $i<$longitud; $i++)
	{	rsort($arraynombres);
		echo $arraynombres[$i];
		echo "<br>";
	}

echo "<br>";
	echo "EL NÚMERO DE ELEMENTOS ACTUAL EN EL ARREGLO ES DE: ",$longitud;



/*var_export($arraynombres);

echo "<p>";
array_push($arraynombres, "Pablo ");
unset($arraynombres [2]);

rsort($arraynombres);
var_export($arraynombres);
*/
?>