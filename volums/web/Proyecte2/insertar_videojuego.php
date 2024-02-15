<?php
include db.php;

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$desarrollador = $_POST['desarrollador'];
$plataforma = $_POST['plataforma'];
$lanzamiento = $_POST['lanzamiento'];
$pegi = $_POST['pegi'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO videojuegos (nombre, desarrollador, plataforma, lanzamiento, pegi)
VALUES ('$nombre', '$desarrollador', '$plataforma', '$lanzamiento', '$pegi')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo videojuego insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>