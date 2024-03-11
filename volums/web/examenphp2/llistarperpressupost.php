<a href="index.php">Volver al indice</a><br><br>
<?php
include_once "bd.php";
$conexion = new basededades();
$conexion->ordenarPorPresupuesto();