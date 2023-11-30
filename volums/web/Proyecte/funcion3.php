<?php

function eliminarJuegosEntreFechas($jsonArray, $fechaInicio, $fechaFin) {
    $juegos = json_decode($jsonArray, true);
    $juegosFiltrados = array_filter($juegos, function($juego) use ($fechaInicio, $fechaFin) {
        $fechaLanzamiento = $juego['Llançament'];
        return ($fechaLanzamiento < $fechaInicio || $fechaLanzamiento > $fechaFin);
    });
    $jsonResultado = json_encode(array_values($juegosFiltrados), JSON_PRETTY_PRINT);
    return $jsonResultado;
}

$jsonOriginal = file_get_contents('eliminarjocs.json');
$fechaInicio = '2019-01-01';
$fechaFin = '2021-12-31';

$jsonSinJuegosEnFechas = eliminarJuegosEntreFechas($jsonOriginal, $fechaInicio, $fechaFin);
echo $jsonSinJuegosEnFechas;

?>
