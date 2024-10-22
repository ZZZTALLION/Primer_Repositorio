<?php
/* CBTIS 89
Programa que imprima nombres contenidos en un array mediante un ciclo, posteriormente que los imprima de modo ascendente y descendente. Luego que se eliminen dos nombres y se agreguen cinco nuevos para finalmente volverlos imprimir de forma ascendente y descendente. Para acabar solo se imprime el total de nombres contenidos en el array.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraynombres = array("Sylvester Stallone","Arnold Schwarzenegger","Keanu Reeves","Anthony Hopkins","Till Lindemann");

$longitud = count($arraynombres);

echo "NOMBRES CONTENIDOS EN EL ARRAY.";
echo "<br>";
echo "<br>";

for ($i=0; $i<$longitud; $i++)
{echo $arraynombres[$i];
echo "<br>";}
echo "<br>";

echo "NOMBRES ORDENADOS DE FORMA ASCENDENTE.";
echo "<br>";
echo "<br>";

for ($i=0; $i<$longitud; $i++)
{sort($arraynombres);
	echo $arraynombres[$i];
echo "<br>";}
echo "<br>";

echo "NOMBRES ORDENADOS DE FORMA DESCENDENTE.";
echo "<br>";
echo "<br>";

for ($i=0; $i<$longitud; $i++)
{rsort($arraynombres);
	echo $arraynombres[$i];
echo "<br>";}
echo "<br>";

echo "POSTERIORMENTE SE ELIMINARON DOS NOMBRES Y SE AGREGARON CINCO.";
		echo "<br>";
		echo "<br>";

unset($arraynombres [4]);
unset($arraynombres [2]);
array_push($arraynombres, "Hugh Jackman", "Dolph Lundgren", "James Mcavoy", "Costas Mandylor", "Doyle Hector");
$longitud = count($arraynombres);

echo "NUEVOS NOMBRES CONTENIDOS EN EL ARRAY DE FORMA ASCENDENTE.";
echo "<br>";
		echo "<br>";

for ($i=0; $i<$longitud; $i++)
	{	sort($arraynombres);
		echo $arraynombres[$i];
		echo "<br>";}
		echo "<br>";

		echo "NUEVOS NOMBRES CONTENIDOS EN EL ARRAY DE FORMA DESCENDENTE.";
echo "<br>";
		echo "<br>";

for ($i=0; $i<$longitud; $i++)
	{	rsort($arraynombres);
		echo $arraynombres[$i];
		echo "<br>";}
		echo "<br>";

echo "EL TOTAL DE NOMBRES CONTENIDOS EN ESTE ARREGLO ES: ",$longitud;

?>