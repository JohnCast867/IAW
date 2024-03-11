<?php
include 'clase_db.php';
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $basededades = new basededades();
    $basededades->exportarPeliculasJSON();
    echo "Exportación realizada";
}

?>

<form method="post" action="">
    <input type="submit" value="Exportar datos">
    <a href="index.php">Volver al índice</a>

</form>
