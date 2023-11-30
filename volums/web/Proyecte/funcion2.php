<?php
include "funciones.php";
$IDs = arrayDeJuegos();
carrega_fitxer("codigos.json", $IDs);
asignarIDs($IDs);
?>