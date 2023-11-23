<?php
include "funciones.php";
$juegos = array();
carrega_fitxer("games.json", $juegos);
tabla($juegos);
?>