<?php

function generarHTML() {
    $html = '<header>
        <div class="titulo">
            <h1>Proyecto 1era avaluacion</h1>
            <h2>John castillo Villalta y Nicolas Gimenez Mansilla</h2>
        </div>
    </header>
    <nav>
        <div>
            <ul>
                <li><a class="link" href="proyecto.php">Inicio</a></li> 
                <li><a class="link" href="funcion1.php">Funcionalidad 1</a></li>
                <li><a class="link" href="funcion2.php">Funcionalidad 2</a></li>
                <li><a class="link" href="funcion3.php">Funcionalidad 3</a></li>
                <li><a class="link" href="funcion4.php">Funcionalidad 4</a></li>
                <li><a class="link" href="funcion5.php">Funcionalidad 5</a></li>
                <li><a class="link" href="funcion6.php">Funcionalidad 6</a></li>
                <li><a class="link" href="funcion7.php">Funcionalidad 7</a></li>
                <li><a class="link" href="funcion8.php">Funcionalidad 8</a></li>
                <li><a class="link" href="funcion9.php">Funcionalidad 9</a></li>
                <li><a class="link" href="funcion10.php">Funcionalidad 10</a></li>
            </ul>
        </div>
    </nav>';

    echo $html;
}


function mostrar_jocs () {
    echo "<a href=funcion1.php>funcion1</a>";
}

function codigos () {
    echo "<a href=funcion2.php>funcion2</a>";
}

function data_expiracio () {
    echo "<a href=funcion4.php>funcion4</a>";
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

function asignar_ids(&$array) {
    $maxId = 0;
    foreach ($array as $juego) {
        if (isset($juego['id']) && $juego['id'] > $maxId) {
            $maxId = $juego['id'];
        }
    }

    foreach ($array as &$juego) {
        if (!isset($juego['id'])) {
            $maxId++;
            $juego['id'] = $maxId;
        }
    }

    echo "<table border=1>";
    echo '<tr><th>ID</th>
        <th>Nom</th>
        <th>Desenvolupador</th>
        <th>Plataforma</th>
        <th>Llançament</th></tr>';

    foreach ($array as $value) {
        echo "<tr><td>" . $value['id'] . "</td>
        <td>" . $value['Nom'] . "</td>
        <td>" . $value['Desenvolupador'] . "</td>
        <td>" . $value['Plataforma'] . "</td>
        <td>" . $value['Llançament'] . "</td></tr>";
    }

    echo "</table>";
}

function eliminarJuegosPorFecha($archivoJson, $fechaInicio, $fechaFin) {
    carrega_fitxer($archivoJson, $juegos);

    $juegosFiltrados = array_filter($juegos, function ($juego) use ($fechaInicio, $fechaFin) {
        $fechaLanzamiento = $juego['Llançament'];
        return ($fechaLanzamiento >= $fechaInicio && $fechaLanzamiento <= $fechaFin);
    });

    foreach ($juegosFiltrados as $juego) {
        $index = array_search($juego, $juegos);
        if ($index !== false) {
            unset($juegos[$index]);
        }
    }

    $jsonActualizado = json_encode(array_values($juegos), JSON_PRETTY_PRINT);

    file_put_contents($archivoJson, $jsonActualizado);
}


function agregarFechaExpiracion($juegos) {
    echo "<table border=1>";
    echo '<tr><th>Nom</th>
        <th>Desenvolupador</th>
        <th>Plataforma</th>
        <th>Llançament</th>
        <th>Expiracio</th></tr>';

    foreach ($juegos as $value) {
        $lanzamiento = new DateTime($value["Llançament"]);
        $expiracion = $lanzamiento->add(new DateInterval('P5Y'));
        $value["Expiracio"] = $expiracion->format('Y-m-d');

        echo "<tr><td>" . $value['Nom'] . "</td>
        <td>" . $value['Desenvolupador'] . "</td>
        <td>" . $value['Plataforma'] . "</td>
        <td>" . $value['Llançament'] . "</td>
        <td>" . $value['Expiracio'] . "</td></tr>";
    }

    echo "</table>";
}

function verificarRegistrosRepetidos($jsonFilePath)
{
    carrega_fitxer($jsonFilePath, $data);
    $nombresJuegos = array_column($data, 'Nom');
    $duplicados = array_unique(array_diff_assoc($nombresJuegos, array_unique($nombresJuegos)));

    if (!empty($duplicados)) {
        echo "¡Hay registros repetidos!\n";
        return 1;
    }

    return 0;
}

function eliminarRepetits($nomFitxer) {
    carrega_fitxer($nomFitxer, $juegos);

    $registrosDuplicados = array_diff_assoc($juegos, array_unique($juegos, SORT_REGULAR));

    $juegosUnicos = array_map("unserialize", array_unique(array_map("serialize", $juegos)));
    $jsonActualizado = json_encode(array_values($juegosUnicos), JSON_PRETTY_PRINT);
    $nouFitxer = 'JSON_Resultat_eliminar_repetits.json';
    file_put_contents($nouFitxer, $jsonActualizado);



    carrega_fitxer($nouFitxer, $juegosNou);
    tabla($juegosNou);
}


function encontrarJuegoMasAntiguoYMasModerno($array) {
    if ($array === null || empty($array)) {
        echo "No hay datos para procesar.\n";
        return;
    }

    usort($array, function ($a, $b) {
        $fechaA = new DateTime($a['Llançament']);
        $fechaB = new DateTime($b['Llançament']);
        return $fechaA <=> $fechaB;
    });

    $juegoMasAntiguo = $array[0];
    $juegoMasModerno = end($array);

    echo "Juego más antiguo:\n";
    print_r($juegoMasAntiguo);
    echo "<br>";
    echo "<br>";

    echo "\nJuego más moderno:\n";
    print_r($juegoMasModerno);
}

function ordenarAlfabeticamenteYMostrar($array) {
    usort($array, function($a, $b) {
        return strcmp($a['Nom'], $b['Nom']);
    });

    echo "<table border=1>";
    echo '<tr><th>Nom</th>
        <th>Desenvolupador</th>
        <th>Plataforma</th>
        <th>Llançament</th></tr>';

    foreach ($array as $value) {
        echo "<tr><td>" . $value['Nom'] . "</td>
        <td>" . $value['Desenvolupador'] . "</td>
        <td>" . $value['Plataforma'] . "</td>
        <td>" . $value['Llançament'] . "</td></tr>";
    }

    echo "</table>";

    $jsonOrdenado = json_encode($array, JSON_PRETTY_PRINT);
    file_put_contents('JSON_Resultat_ordenat_alfabetic.json', $jsonOrdenado);
}

function contarVideojocsPerAny($array) {
    // Crear un array para almacenar el recuento de videojuegos por año
    $contadores = array();

    // Contar videojuegos por año
    foreach ($array as $value) {
        $any = date('Y', strtotime($value['Llançament']));

        if (!isset($contadores[$any])) {
            $contadores[$any] = 1;
        } else {
            $contadores[$any]++;
        }
    }

    // Imprimir la información en pantalla
    echo "<table border=1>";
    echo '<tr><th>Any</th>
        <th>Nombre de Videojocs</th></tr>';

    foreach ($contadores as $any => $count) {
        echo "<tr><td>" . $any . "</td>
        <td>" . $count . "</td></tr>";
    }

    echo "</table>";
}
?>