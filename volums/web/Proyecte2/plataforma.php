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

    $nom = test_input($_POST['nom']);

    $basedatos = new Base_de_datos_videojocs();
    
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



