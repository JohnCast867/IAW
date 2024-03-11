<?php
include 'clase_db.php';
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titol'];
    $data_estrena = $_POST['data_estrena']; // Corrected field name
    $pressupost = $_POST['pressupost'];
    $pais = $_POST['pais'];

    // Assuming you've already established a database connection in 'conexion.php'
    $basededades = new basededades();
    $conn = $basededades->connectar_bd($servername, $username, $password); // Replace these variables with your actual connection details

    $basededades->insertarPelicula($titulo, $data_estrena, $pressupost, $pais);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alta de Película</title>
</head>
<body>
    <h1>Alta de Película</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Título: <input type="text" name="titulo"><br>
        Fecha de estreno: <input type="date" name="data_estrena"><br> <!-- Corrected field name -->
        Presupuesto: <input type="number" name="pressupost"><br>
        País:
        <input type="radio" name="pais" value="SPAIN">España
        <input type="radio" name="pais" value="ENGLAND">Inglaterra
        <input type="radio" name="pais" value="US">Estados Unidos<br>
        <input type="submit" name="submit" value="Insertar">
    </form>
    <a href="index.php">Volver al índice</a>
</body>
</html>

