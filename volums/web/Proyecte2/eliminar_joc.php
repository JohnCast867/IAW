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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nom = test_input($_POST['nom']);
        $data_llançament = test_input($_POST['data_llançament']);
        $pegi = test_input($_POST['pegi']);
        $desenvolupador_id = test_input($_POST['desenvolupador_id']);
    
        $basedatos = new Base_de_datos_videojocs();
        
        $basedatos->eliminar_joc($servername, $username, $password, $nom, $data_llançament, $pegi, $desenvolupador_id);
    }
?>    
    <h2>Eliminar Videojoc</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nombre del videojuego:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="data_llançament">Fecha de salida:</label>
        <input type="text" id="data_llançament" name="data_llançament" placeholder="YYYY-MM-DD"><br><br>
        
        <input type="submit" value="Eliminar Videojoc">
    </form>
</body>
</html>

