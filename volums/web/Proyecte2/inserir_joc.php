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
        
        $basedatos->insertar_joc($servername, $username, $password, $nom, $data_llançament, $pegi, $desenvolupador_id);
    }
?>    
    <h2>Insertar Nuevo Videojuego</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nom">Nom del Joc:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="data_llançament">Data de Llançament:</label>
        <input type="text" id="data_llançament" name="data_llançament" placeholder="YYYY-MM-DD"><br><br>
     
        <label for="pegi">PEGI:</label>
        <input type="number" id="pegi" name="pegi" min="0"><br><br>

        <label for="desenvolupador_id">ID del Desenvolupador:</label>
        <input type="number" id="desenvolupador_id" name="desenvolupador_id" min="1" required><br><br>

        <input type="submit" value="Afegir Joc">
    </form>
</body>
</html>

