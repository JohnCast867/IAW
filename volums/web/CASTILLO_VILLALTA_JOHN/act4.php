<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Activitat 4</h1>
</body>
<?php
    include "funciones.php";
    $notas = array();
    carrega_fitxer("notes.json", $notas);
    print_r($notas);
    mostrarNotasAlumnos('notes.json');
?>
</html>