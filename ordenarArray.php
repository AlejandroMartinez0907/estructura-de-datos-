<?php

$edades = array("carlos"=>23, "maria"=>21, "juan"=>15);

asort($edades);
print_r($edades);

$nombresFiltrar = array_filter(array_keys($edades), function($valor): bool {
    return is_string($valor); 
});

print_r($nombresFiltrar);



?>