<?php
/* CBTIS 89
Programa que ordena números de forma ascendente y descendente.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>