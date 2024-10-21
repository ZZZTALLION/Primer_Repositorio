<?php
/* CBTIS 89
Programa que imrpime la cantidad de billetes y monedas de un cheque.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$che=5793;

echo "Dinero en el cheque: ",$che;
echo "<br>";
echo "<br>";

$b1000=$che/1000;
$resi=$che%1000;

echo "Le darán ",floor($b1000)," billetes de mil.";
echo "<br>";

$b500=$resi/500;
$resi=$resi%500;

echo "Le darán ",floor($b500)," billetes de quinientos.";
echo "<br>";

$b200=$resi/200;
$resi=$resi%200;

echo "Le darán ",floor($b200)," billetes de docientos.";
echo "<br>";

$b100=$resi/100;
$resi=$resi%100;

echo "Le darán ",floor($b100)," billetes de cien.";
echo "<br>";

$b50=$resi/50;
$resi=$resi%50;

echo "Le darán ",floor($b50)," billetes de cincuenta.";
echo "<br>";

$b20=$resi/20;
$resi=$resi%20;

echo "Le darán ",floor($b20)," billetes de veinte.";
echo "<br>";

$m10=$resi/10;
$resi=$resi%10;

echo "Le darán ",floor($m10)," monedas de diez.";
echo "<br>";

$m5=$resi/5;
$resi=$resi%5;

echo "Le darán ",floor($m5)," monedas de cinco.";
echo "<br>";

$m2=$resi/2;
$resi=$resi%2;

echo "Le darán ",floor($m2)," monedas de dos.";
echo "<br>";

$m1=$resi/1;
$resi=$resi%1;

echo "Le darán ",floor($m1)," monedas de uno.";
echo "<br>";

?>