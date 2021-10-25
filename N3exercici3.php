<?php
$x = array (10, 20, 30, 40, 50);
//array inicial
echo 'Array inicial: ' . '<br>';
print_r($x);
echo '<br>';

unset($x[2]);
echo 'Array tras eliminar elemento 2: ' . '<br>';
print_r($x);
echo '<br>';


$x = array_values($x);
echo 'Array tras arreglo de indices: ' . '<br>';
print_r($x);
?>

