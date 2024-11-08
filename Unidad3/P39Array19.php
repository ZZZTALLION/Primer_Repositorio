<?php
/* CBTIS 89
Programa que almacena información de 6 personas y dependiendo de su edad los contabilisa en diversos arreglos de acuerdo a las siguientes condiciones:
Grupo 1 = Menor a 18 años
Grupo 2 = Mayor a 18 años y menor a 49 años.
Grupo 3 = Mayor a 50 años.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

$nombre = array("Puka","Pery","Tilin","Rosi","Paco","Mari");
$edad = array(17,30,71,38,12,58);
$grupo1 = array();
$grupo2 = array();
$grupo3 = array();
$longitud = count($nombre);

/*echo "NOMBRES";
echo "<br>";

for ($i=0; $i<$longitud; $i++)
	{echo $nombre[$i]," ---";
		echo "<br>";}
*/


for ($i=0; $i<$longitud; $i++)
	{if ($edad[$i]<=18){
		$grupo1[]= 1;
	}
	else{
$grupo1[]=0;
	}
}

for ($i=0; $i<$longitud; $i++)
	{if ($edad[$i]<=49 && $edad[$i]>18) {
		$grupo2[]= 1;
	}
	else{
$grupo2[]=0;
	}
}

for ($i=0; $i<$longitud; $i++)
	{if ($edad[$i]>50){
		$grupo3[]= 1;
	}
	else{
$grupo3[]=0;
	}
}


echo "Nombre---Edad---Grupo1---Grupo2---Grupo3";
echo "<br>";
for ($i=0; $i<$longitud; $i++){
echo $nombre[$i],"--------",$edad[$i],"--------",$grupo1[$i],"-----------",$grupo2[$i],"----------",$grupo3[$i];
echo "<br>";
}


?>