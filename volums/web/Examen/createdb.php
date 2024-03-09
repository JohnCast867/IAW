<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create DB</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "db.php";
    include 'funciones.php';
    generarHTML();
    try {
      $sql = "CREATE DATABASE PELICULES";
      $conn->exec($sql);
      echo "Database created successfully<br>";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

</body>
</html>
