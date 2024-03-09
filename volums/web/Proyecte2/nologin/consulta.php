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
    $entidad = test_input($_POST['entidad']);
    $accion = test_input($_POST['accion']);

    $basedatos = new Base_de_datos_videojocs();
    
    if ($accion === "consulta") {
        $basedatos->consulta($servername, $username, $password, $entidad);
    } elseif ($accion === "eliminacion") {
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


