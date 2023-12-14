<?php

function carrega_fitxer($nomFitxer, &$arrayAsso) {
    $jsonString = file_get_contents($nomFitxer);
    $arrayAsso = json_decode($jsonString, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error  JSON: ' . json_last_error_msg());
    }
}

function mostrarNotesAlumnes($nomFitxer) {
    foreach ($dades['assignatures'] as $assignatura) {
        foreach ($assignatura['alumnes'] as $alumne => $nota) {
            echo $alumne . "\n";
            echo $assignatura['nom'] . ": " . $nota . "\n";
        }
        echo "\n"; 
    }
}

?>
