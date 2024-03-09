<?php

function generarHTML() {
    $html = '<header>

    </header>
    <nav>
        <div>
            <ul>
                <li><a class="link" href="index.php">INICI</a></li>
                <li><a class="link" href="createdb.php">CREAR_DB</a></li>
                <li><a class="link" href="creaciotaules.php">CREACIO_TABLAS</a></li>
                <li><a class="link" href="alta.php">ALTA</a></li>
                <li><a class="link" href="cercar.php">CERCAR</a></li>
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