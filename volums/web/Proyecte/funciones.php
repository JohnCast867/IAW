<?php

function mostrar_menu () {
    echo "<a href=funcion1.php>funcion1</a>";
}

function codigos () {
    echo "<a href=funcion2.php>funcion2</a>";
}

function carrega_fitxer($nomFitxer, &$arrayAsso) {
    $jsonString = file_get_contents($nomFitxer);
    $arrayAsso = json_decode($jsonString, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error  JSON: ' . json_last_error_msg());
    }
}


function tabla ($array) {
echo "<table border=1>";
echo '<tr><th>Nom</th>
    <th>Desenvolupador</th>
    <th>Plataforma</th>
    <th>Llançament</th></tr>';
foreach ($array as $key => $value){
    echo "<tr><td>" . $value['Nom'] . "</td>
    <td>" . $value['Desenvolupador'] . "</td>
    <td>" . $value['Plataforma'] . "</td>
    <td>" . $value['Llançament'] . "</td></tr>";
    }
    echo "</table>";
}

function asignarIDs(&$arrayDeJuegos) {
    // Obtener el ID más alto existente
    $idMasAlto = obtenerIDMasAlto($arrayDeJuegos);

    // Asignar IDs a juegos que no tienen
    foreach ($arrayDeJuegos as &$juego) {
        if (!isset($juego['id'])) {
            $idMasAlto++;
            $juego['id'] = $idMasAlto;
        }
    }
}

function obtenerIDMasAlto($arrayDeJuegos) {
    $idMasAlto = 0;
    foreach ($arrayDeJuegos as $juego) {
        if (isset($juego['id']) && $juego['id'] > $idMasAlto) {
            $idMasAlto = $juego['id'];
        }
    }
    return $idMasAlto;
}
?>