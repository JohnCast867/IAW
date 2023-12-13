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
carrega_fitxer("games.json", $juegos);

$jsonFilePath = 'games.json';
$resultado = verificarRegistrosRepetidos($jsonFilePath);
if ($resultado === 1) {
    echo "Se encontraron registros repetidos.\n";
} else {
    echo "No se encontraron registros repetidos.\n";
}



?>
</html>