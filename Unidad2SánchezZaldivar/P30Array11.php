<?php
/* CBTIS 89
Programa que añade una nueva variable a un array mediante una nueva función.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/

   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>