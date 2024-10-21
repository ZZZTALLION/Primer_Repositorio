<?php
/* CBTIS 89
Programa que imprime distintos arreglos en uno solo.
Teresa del Carmen Sánchez Zaldivar.
3ªA Programación Matutino.
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>