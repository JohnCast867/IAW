<?php
include 'clase_db.php';
include 'conexion.php';

$basededades = new basededades("db", "root", "politecnic", "PELICULAS");

if ($_GET['tipo'] == 'nombre') {
    $peliculas = $basededades->listarPeliculasPorNombre();
} elseif ($_GET['tipo'] == 'pressupost') {
    $peliculas = $basededades->listarPeliculasPresupuestoMenor(1000000);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cerca de Pel·lícules</title>
</head>
<body>
    <h1>Cerca de Pel·lícules</h1>
    <a href="index.php">Volver al índice</a>

    <ul>
        <?php foreach ($peliculas as $pelicula): ?>
            <li><?php echo $pelicula['titol']; ?> - <?php echo $pelicula['fecha estrena']; ?>