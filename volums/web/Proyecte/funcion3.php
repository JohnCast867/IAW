<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
</body>
<?php
include "funciones.php";
generarHTML();
$juegos = array();
carrega_fitxer("eliminarjocs.json", $juegos);
tabla($juegos);
#eliminarJuegosPorFecha('eliminarjocs.json', '2015-01-01', '2022-01-01');

?>
</html>