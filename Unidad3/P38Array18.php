<?php
/* CBTIS 89
Programa que almacena datos en un arreglo multidimensional y posteriormente los imprime en diferentes posiciones.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$datos = array(array(10,20,30),array(40,50,60),array(70,80,90));

echo "NORMAL";
echo "<br>";

for($i=0;$i<3;$i++)
{for ($j=0;$j<3;$j++)
{echo $datos[$i][$j]. " ";}
echo "<br>";
}

ECHO "<br>";
echo "FILAS A COLUMNAS";
echo "<br>";

for($i=0;$i<3;$i++)
{for ($j=0;$j<3;$j++)
{echo $datos[$j][$i]. " ";}
echo "<br>";
}

ECHO "<br>";
echo "COLUMNAS INVERSAS";
echo "<br>";

for($i=0;$i<3;$i++)
{for ($j=0;$j<3;$j++)
{rsort($datos[$i]);
	echo $datos[$i][$j]. " ";}
echo "<br>";
}


echo "<br>";
echo "FILAS INVERTIDAS";
echo "<br>";

for($i=2;$i>=0;$i--)
{for ($j=2;$j>=0;$j--)
{echo $datos[$i][$j]. " ";}
echo "<br>";
}

echo "<br>";
echo "ESPEJO INVERSO";
echo "<br>";
for($i=2;$i>=0;$i--)
{for ($j=0;$j<3;$j++)
{echo $datos[$i][$j]. " ";}
echo "<br>";
}

?>