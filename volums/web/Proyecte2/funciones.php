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

function carrega_fitxer($nomFitxer, &$arrayAsso) {
    $jsonString = file_get_contents($nomFitxer);
    $arrayAsso = json_decode($jsonString, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error  JSON: ' . json_last_error_msg());
    }
}

# funcion 1
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
?>