<?php
/* CBTIS 89
Programa que añade una nueva variable a un array mediante una nueva función y posteriormente los ordena de modo ascendente y descendente.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraycosas = array("Camisa", "Pantalón", "Cinturón");
array_push($arraycosas, "Gorra", "Calcetines");

//orden ascendente
sort($arraycosas);
var_export($arraycosas);

echo "<p>";

//orden descendente
rsort($arraycosas);
var_export($arraycosas);
?>