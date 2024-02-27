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

    $nom = test_input($_POST['nom']);

    // Instanciar la clase Base_de_datos_videojocs
    $basedatos = new Base_de_datos_videojocs();
    
    // Llamar al método inserir para insertar el cliente en la base de datos
    $basedatos->insertar_plataforma($servername, $username, $password, $nom);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Formulario de nueva plataforma</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <input type="submit" value="Enviar dades">
    </form>
</body>
</html>



