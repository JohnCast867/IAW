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
        $basedatos->eliminar_joc($servername, $username, $password, $nom, $data_llançament, $pegi, $desenvolupador_id);
    }
?>    
    <h2>Eliminar Videojoc</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom del Videojoc:</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="data_llançament">Data de Llançament:</label><br>
        <input type="text" id="data_llançament" name="data_llançament" placeholder="YYYY-MM-DD"><br><br>
        
        <label for="pegi">PEGI:</label><br>
        <input type="number" id="pegi" name="pegi" min="0"><br><br>
        
        <label for="desenvolupador_id">ID del Desenvolupador:</label><br>
        <input type="number" id="desenvolupador_id" name="desenvolupador_id" required><br><br>
        
        <input type="submit" value="Eliminar Videojoc">
    </form>
</body>
</html>

