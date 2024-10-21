<?php
/* CBTIS 89
Programa que almacena datos en un arreglo y posteriormente los separa en dos variables para imprimirlos mediante cadenas de texto.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$variable = array("Juan"=>"Construcción","Till"=>"Programación","Sylvester"=>"Arquitectura","Guillermo"=>"Electronica","Pepito"=>"Mecatronica");

echo "** ALUMNOS **","<br>","<br>";

foreach ($variable as $nombre => $especialidad) {
	echo "El alumno " . $nombre . " estudia en el CBTis 89 en la especialidad de " . $especialidad;
	echo "<br>","<br>";
}

?>