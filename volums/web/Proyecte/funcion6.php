<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion 6</title>
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
verificarRegistrosRepetidos($jsonFilePath);
guardarRegistrosRepetidosEnJSON($jsonFilePath);

carrega_fitxer("JSON_Resultat_repetits.json", $juegos);
tabla($juegos);

?>
</html>
