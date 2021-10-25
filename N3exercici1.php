<?php


$str = "cadena exemple del que cal fer";

// convertir cadena en array
$arr1 = str_split($str);

// averiguar longitud del array
$longitud=strlen($str);
// inicializar indice de array resultante
$index=0;

//Bucle para recorrer array
for ($cont=1 ; $cont<=$longitud; $cont++){
// averiguar si es un espacio en blanco
    
    if ($arr1[$cont-1] <> " "){
        //colocarlo en el nuevo array
        $arr2[$index]=$arr1[$cont-1];
        //Incrementar el indice
        $index++;
  }
}

//Cadena inicial
echo "Cadena Inicial: " . $str . '<br>';
//Array resultante de la funcion conversion
echo "Array inicial: ";
print_r($arr1);
echo '<br>';
//Array resultante de eliminar espacios
echo "Array sin espacios: ";
print_r($arr2);

?>