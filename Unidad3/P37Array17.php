<?php
/* CBTIS 89
Programa que imprime números positivos y negativos contenidos en un array para posteriormente sumar solo los positivos y luego solamente los negativos.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$arraypositivo = array();
$arraynegativo = array();
$sumaPositivos=0;
$sumaNegativos=0;


for ($i = 0; $i < count($arraynumeros); $i++) {
    if ($arraynumeros[$i] >= 0) {
        $arraypositivo[] = $arraynumeros[$i];
        $sumaPositivos += $arraynumeros[$i]; // Sumamos los positivos
    } else {
        $arraynegativo[] = $arraynumeros[$i];
        $sumaNegativos += $arraynumeros[$i]; // Sumamos los negativos
    }
}


	echo "Números positivos </P>";
 /*ciclo que va a mostra el valor de array positivo*/
for ($i=0; $i <count($arraypositivo) ; $i++) { 
	echo $arraypositivo[$i];
	echo "<br>"; 
}
echo "<br>";
echo "<br>Suma de positivos: $sumaPositivos<br>";
echo "<br>";
	echo "Números negativos </P> ";
/*ciclo que va a mostra el valor de array negativo*/
for ($i=0; $i <count($arraynegativo) ; $i++) { 
	echo $arraynegativo[$i];
	
	echo "<br>"; 
}
echo "<br>";
echo "<br>Suma de negativos: $sumaNegativos<br>";
echo "<br>";

?>