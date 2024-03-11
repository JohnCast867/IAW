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
    include "../DBACCES.php";
    include "../clase_db.php";
    include 'funciones.php';
    generarHTML();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $base_de_datos = new Base_de_datos_videojocs();
        
        // Consultar por Nombre
        if (!empty($_POST['nom'])) {
            $nom = $_POST['nom'];
            $base_de_datos->consulta_juego_por_nombre($servername, $username, $password, $nom);
        }
    
        // Consultar por Fecha de Lanzamiento
        if (!empty($_POST['data_llançament'])) {
            $fecha_llançament = $_POST['data_llançament'];
            $base_de_datos->consulta_juego_por_fecha($servername, $username, $password, $fecha_llançament);
        }
    
        // Consultar por Desarrollador
        if (!empty($_POST['desenvolupador'])) {
            $desenvolupador = $_POST['desenvolupador'];
            $base_de_datos->consulta_juego_por_desenvolupador($servername, $username, $password, $desenvolupador);
        }
    }
?>    
    <h2>Consulta de Videojocs</h2>

    <form method="post" action="">
        <label for="nom">Consultar por Nombre:</label><br>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="data_llançament">Consultar por Fecha de Lanzamiento:</label><br>
        <input type="text" id="data_llançament" name="data_llançament" placeholder="YYYY-MM-DD"><br><br>
        
        <label for="desenvolupador">Consultar por Empresa:</label><br>
        <input type="text" id="desenvolupador" name="desenvolupador"><br><br>
        
        <input type="submit" value="Consultar">
    </form>
</body>
</html>

