<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los separa en dos variables para imprimirlos mediante cadenas de texto.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$kilos = array("mango"=>"$20","sandía cortada"=>"$30","limón"=>"$15","naranja"=>"$25");

echo "** FRUTERÍA MISHIMA **","<br>","<br>";

foreach ($kilos as $fruta => $precio) {
	echo "El kilo de " . $fruta . " cuesta " . $precio;
	echo "<br>","<br>";
}

?>