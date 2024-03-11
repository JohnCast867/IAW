<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar peliculas</title>
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
    
        $titol = test_input($_POST['titol']);
        $data_llançament = test_input($_POST['data_llançament']);
        $pressupost = test_input($_POST['pressupost']);
        $pais = test_input($_POST['pais']);
    
        $basedatos = new basededades();
        
        $basedatos->donar_alta($servername, $username, $password, $titol, $data_llançament, $pressupost, $pais);
        
    }

?>    
    <h2>Insertar Nuevo Videojuego</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="titol">titol de la pelicula:</label>
        <input type="text" id="titol" name="titol" required><br><br>

        <label for="data_llançament">Data de Llançament:</label>
        <input type="text" id="data_llançament" name="data_llançament" placeholder="YYYY-MM-DD"><br><br>
     
        <label for="pressupost">Pressupost:</label>
        <input type="number" id="pressupost" name="pressupost"><br><br>

        País:
        <select id="pais" name="pais"> 
            <option value="SPAIN">Espanya</option>
            <option value="ENGLAND">Anglaterra</option>
            <option value="US">Estats Units</option>
        </select><br><br>

        <input type="submit" value="Donar d'alta">
    </form>

</body>
</html>

