<?php

$primerArray = array(5,7,4,6,3);
$segonArray = array(125,223,769);

//afegir un element al segonArray
$segonArray[3]=555;

//mescla dels arrays
$resultat = array_merge($primerArray, $segonArray);

//resultat
print_r($resultat);



?>