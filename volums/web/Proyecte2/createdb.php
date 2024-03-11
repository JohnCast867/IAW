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
    include 'funciones.php';
    generarHTML();
    include "db.php";

    try {
      $sql = "CREATE DATABASE VIDEOJOCS";
      $conn->exec($sql);
      echo "Database created successfully<br>";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

</body>
</html>
