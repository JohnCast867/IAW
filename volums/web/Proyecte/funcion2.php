<?php
include "funciones.php";
$IDs = array();
carrega_fitxer("codigos.json", $IDs);
asignar_ids($IDs);
?>