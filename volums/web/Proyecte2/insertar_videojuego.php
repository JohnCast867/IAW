<?php
include "DBACCES.php";

// Obtener los datos del formulario
$nom = $_POST['nom'];
$Desenvolupador = $_POST['Desenvolupador'];
$plataforma = $_POST['plataforma'];
$Llançament = $_POST['Llançament'];
$pegi = $_POST['pegi'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO VIDEOJOCS (nom, Desenvolupador, plataforma, Llançament, pegi)
VALUES ('$nom', '$Desenvolupador', '$plataforma', '$Llançament', '$pegi')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo videojuego insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>