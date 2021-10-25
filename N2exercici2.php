<?php


$str = "ab";

// convertir cadena en array
$arr1 = str_split($str);
// averiguar longitud del string
$longitud=strlen($str);

//Guardar primer i darrer caracter
$fcar = $arr1[0];
$lcar = $arr1[$longitud-1];

// intercanviar caracters
$arr1[0] = $lcar;
$arr1[$longitud -1] = $fcar;

// convertir array en cadena 
$strresultant = implode($arr1);
// imprimir resultat
echo "Cadena inicial: " . $str . '<br>';
echo "Cadena resultant: " . $strresultant;




?>