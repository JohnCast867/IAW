<?php
    include "db.php";

    try {
      $sql = "CREATE DATABASE PELICULAS";
      $conn->exec($sql);
      echo "Database created successfully<br>";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>