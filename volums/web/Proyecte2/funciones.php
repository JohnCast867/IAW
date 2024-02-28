<?php

function generarHTML() {
    $html = '<header>
        <div class="titulo">
            <h1>Proyecte 2a avaluacio</h1>
            <h2>JOHN CASTILLO y NICOLAS GIMENEZ</h2>
        </div>
    </header>
    <nav>
        <div>
            <ul>
                <li><a class="link" href="index.php">INICI</a></li>
                <li><a class="link" href="createdb.php">CREACIO_DB</a></li>
                <li><a class="link" href="creaciotaules.php">CREACIO_TABLAS</a></li>
                <li><a class="link" href="insert.php">INSERCIO_DB</a></li>
                <li><a class="link" href="desarrollador.php">DESARROLLADORS</a></li>
                <li><a class="link" href="plataforma.php">PLATAFORMES</a></li>
                <li><a class="link" href="genero.php">GENERES</a></li>
                <li><a class="link" href="consulta.php">CONSULTAR_</a></li>
                <li><a class="link" href="inserir_joc.php">INSERIR_JOC</a></li>
                <li><a class="link" href="3consultes.php">3_CONSULTES</a></li>
                <li><a class="link" href="eliminar_joc.php">ELIMINAR_JOC</a></li>
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