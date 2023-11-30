<?php
include "funciones.php";
$codigos = arrayAsso();
carrega_fitxer("games.json", $codigos);
asignar_codigos($codigos);        
carrega_fitxer($nombreArchivo, $codigos);
asignar_codigos($codigos);
tabla($codigos);
?>