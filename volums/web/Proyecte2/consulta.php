<?php
include "DBACCES.php";
include "clase_db.php";
include "funciones.php";
generarHTML();

// Función para limpiar y validar datos
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entidad = test_input($_POST['entidad']);
    $accion = test_input($_POST['accion']);

    // Instanciar la clase Base_de_datos_videojocs
    $basedatos = new Base_de_datos_videojocs();
    
    if ($accion === "consulta") {
        // Llamar al método consulta para realizar la consulta
        $basedatos->consulta($servername, $username, $password, $entidad);
    } elseif ($accion === "eliminacion") {
        // Llamar al método eliminar para realizar la eliminación
        $basedatos->eliminar($servername, $username, $password, $entidad);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Consulta y Eliminación de Entidades</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Consulta y Eliminación de Entidades</h2>
    <form method="post">
        <label for="entidad">Seleccione la entidad:</label>
        <select name="entidad" id="entidad">
            <option value="PLATAFORMA">Plataforma</option>
            <option value="DESENVOLUPADOR">Empresa</option>
            <option value="GENERE">Género</option>
        </select>
        <br>
        <label for="accion">Seleccione la acción:</label>
        <select name="accion" id="accion">
            <option value="consulta">Consulta</option>
            <option value="eliminacion">Eliminación</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


