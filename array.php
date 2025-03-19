<?php

$paises = array("españa", "ghana","japon","colombia");
$paises[]="indonesia";
print_r($paises);

/*$paises=["españa","ghana","japon","colombia" ];
  unset($paises[2]);
print_r($paises);*/

$eliminarPais = "ghana";
$llave = array_search($eliminarPais, $paises);

if ($llave !== false) {
    unset( $paises[$llave]);

}
print_r($paises);

?>