<?php
/* CBTIS 89
Programa que almacena el nombre de cuatro artículos en un arreglo llamado $Productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas.

Debes calcular por medio de un ciclo el subtotal y el promedio de cada producto y guardarlo en arreglos $Subtotal y $Promedio según corresponda.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$Productos = array("Vestido","Pantalón","Cinturón","Camiseta");
$Precios = array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Suma=0;
$Subtotal = array();
$Promedio = array();

for ($i=0;$i<count($Precios);$i++)
{
	for ($j=0;$j<count($Precios);$j++)
	{
		$Suma=$Precios[$i][$j];
		$Subtotal[$i]+=$Suma;
		//$Subtotal[$i]=$Subtotal[$i]+$Precios[$i][$j];
		$Promedio[$i]=$Subtotal[$i]/3;
	}
}

echo "<br>";
echo "Productos---Subtotal---Promedio";
echo "<br>";
for ($i=0;$i<count($Productos);$i++)
{
	echo $Productos[$i],"-------",$Subtotal[$i],"-------",$Promedio[$i];
	echo "<br>";
}

echo "<br>";
echo "Precios";
echo "<br>";

for ($i=0;$i<3;$i++)
	{
		for ($j=0;$j<3;$j++)
		{
			echo $Precios[$i][$j]. " ";
		}
		echo "<br>";
	}

?>