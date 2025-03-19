<?php

$paises = array("españa", "ghana","japon","colombia");
$paises[]="indonesia";
print_r($paises);


$paisesSeleccionados = array_slice($paises,1,2);
print_r($paisesSeleccionados);
?>