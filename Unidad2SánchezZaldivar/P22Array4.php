<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los separa en dos variables para imprimirlos mediante cadenas de texto.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$equipo = array("portero"=>"Pancho","defensa"=>"Juanito","medio"=>"José","delantero"=>"Luis");

echo "** SELECCIÓN NACIONAL **","<br>","<br>";

foreach ($equipo as $posicion => $jugador) {
	echo "El jugador " . $jugador . " es el " . $posicion;
	echo "<br>","<br>";
}


?>