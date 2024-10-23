<?php
/*CBTIS 89
Examen2MartinezGarrido.php
Programa que guarde precios en un arreglo luego en un ciclo su IVA en otro arreglo, despues calcula el descuento luego imprime el contenido de todos los arreglos.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino

*/
echo "Arreglo Precios";
echo "<p>";
$arraynombres = array('Refrigerador' => "500" ,'Televisor' => "400" , 'Microondas' => "200" , 'Comedor' => "700" ,"Consola de videojuegos" => "100" );
$longitud = count($arraynombres);

 foreach($arraynombres as $producto=>$precio)
 { echo "El producto:" , $producto ,"cuesta: ", $precio;
  echo "<p>";}



echo "Arreglo arrayIVA";
echo "<p>";
  $arrayIVA = array('Refrigerador' => "80", 'Televisor' => "64",'Microondas' => "32",'Comedor' => "112",'Consola de videojuegos' => "16", );
   foreach($arrayIVA as $productoO=>$precioIVA)
 { echo "El producto:" , $productoO ,"cuesta con IVA: ", $precioIVA;
  echo "<p>";}

 echo "Arreglo arraySubtotal";
echo "<p>";
  $arraySub = array('Refrigerador' => "580", 'Televisor' => "464",'Microondas' => "232",'Comedor' => "812",'Consola de videojuegos' => "116", );
   foreach($arraySub as $productoS=>$precioSUB)
 { echo "El producto:" , $productoS ,"cuesta con su subtotal: ", $precioSUB;
  echo "<p>";}

echo "Arreglo array Total";
echo "<p>";

    $arrayTot = array('Refrigerador' => "522", 'Televisor' => "417.6",'Microondas' => "208.8",'Comedor' => "730.8",'Consola de videojuegos' => "104.4", );
   foreach($arrayTot as $productoT=>$precioTOT)
 { echo "El producto final:" , $productoT ,"cuesta finalmente: ", $precioTOT;
  echo "<p>";}


?>