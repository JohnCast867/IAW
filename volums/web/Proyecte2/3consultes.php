<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Videojuego</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "DBACCES.php";
    include "clase_db.php";
    include 'funciones.php';
    generarHTML();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nom = test_input($_POST['nom']);
        $data_llançament = test_input($_POST['data_llançament']);
        $pegi = test_input($_POST['pegi']);
        $desenvolupador_id = test_input($_POST['desenvolupador_id']);
    
        // Instanciar la clase Base_de_datos_videojocs
        $basedatos = new Base_de_datos_videojocs();
        
        // Llamar al método inserir para insertar el cliente en la base de datos
        $basedatos->insertar_joc($servername, $username, $password, $nom, $data_llançament, $pegi, $desenvolupador_id);
    }
?>    
    <h2>Consulta de Videojocs</h2>

<form action="consulta.php" method="GET">
    <label for="nom">Cerca per nom:</label>
    <input type="text" id="nom" name="nom">
    <input type="submit" value="cercar">
</form>

<form action="consulta.php" method="GET">
    <label for="data_inici">Cerca per data de llançament:</label>
    <input type="text" id="data_inici" name="data_inici" placeholder="YYYY-MM-DD"><br><br>

    <label for="data_final">fins a</label>
    <input type="text" id="data_final" name="data_final" placeholder="YYYY-MM-DD"><br><br>

    <input type="submit" value="cercar">
</form>

<form action="consulta.php" method="GET">
    <label for="empresa">Cerca per empresa desenvolupadora:</label>
    <input type="text" id="empresa" name="empresa">
    <input type="submit" value="cercar">
</form>
</body>
</html>

