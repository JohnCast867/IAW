<?php

function carrega_fitxer($nomFitxer, &$arrayAsso) {
    $jsonString = file_get_contents($nomFitxer);
    $arrayAsso = json_decode($jsonString, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error  JSON: ' . json_last_error_msg());
    }
}

function mostrarNotasAlumnos($nomFitxer) {
    foreach ($datos["assignatures"] as $asignatura) {
        echo $asignatura["nom"] . ":\n";

        foreach ($asignatura["alumnes"] as $alumno => $nota) {
            echo $alumno . "\n";
            echo "  " . $asignatura["nom"] . ": " . $nota . "\n";
        }
        echo "\n";
    }
}

?>
