<?php
include "funciones.php";
$nomFitxer = code();
carrega_fitxer("games.json", $nomFitxer);
assignar_codi($nomFitxer);
?>