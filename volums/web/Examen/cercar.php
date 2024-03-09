<?php
include "DBACCES.php";
include "clase_db.php";
include "funciones.php";
generarHTML();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entidad = test_input($_POST['entidad']);

    $basedatos = new basededades();
    
    if ($accion === "consulta") {
        $basedatos->consulta($servername, $username, $password);
    } elseif ($accion === "consulta2") {
        $basedatos->eliminar($servername, $username, $password);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Consulta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Cerca de pel·lícules</h2>
    
    <a href="consulta1.php" id="consulta">Llistat de pel·lícules ordenades per nom</a><br><br>
    
    <a href="consulta2.php" id="consulta2">"Llistat de pel·lícules amb pressupost menor a 1 milió d’euros</a><br><br>
    
    <a href="index.php">Tornar a la pàgina d'índex</a>
    
</body>
</html>


