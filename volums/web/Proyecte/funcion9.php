<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion 9</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
</body>
<?php
include "funciones.php";
generarHTML();
$IDs = array();
carrega_fitxer("codigos.json", $IDs);
ordenarAlfabeticamenteYMostrar($IDs);
?>
</html>
