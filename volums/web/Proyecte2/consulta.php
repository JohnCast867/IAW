<html>
<!DOCTYPE html>
<head>
    <title>Consulta de Base de Datos</title>
</head>
<body>
    <h2>Consulta de Base de Datos</h2>
    <form method="post">
        <label for="columna">Columna:</label>
        <input type="text" name="columna" id="columna">
        <label for="tabla">Tabla:</label>
        <input type="text" name="tabla" id="tabla">
        <input type="submit" name="submit" value="Consultar">
    </form>
<?php
include "DBACCES.php";
include "clase_db.php";
include "funciones.php";

// Función para limpiar y validar datos
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $columna = test_input($_POST['columna']);
    $tabla = test_input($_POST['tabla']);

    // Instanciar la clase Base_de_datos_videojocs
    $basedatos = new Base_de_datos_videojocs();
    
    // Llamar al método consulta para realizar la consulta
    $basedatos->consulta($servername, $username, $password, $columna, $tabla);
}
?>

