<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taules</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "DBACCES.php";
    include 'funciones.php';
    generarHTML();
try {
    $sql = "-- MySQL Workbench Forward Engineering

    SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
    SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
    SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
    
    -- -----------------------------------------------------
    -- Schema PELICULES
    -- -----------------------------------------------------
    
    -- -----------------------------------------------------
    -- Schema PELICULES
    -- -----------------------------------------------------
    CREATE SCHEMA IF NOT EXISTS `PELICULES` DEFAULT CHARACTER SET utf8 ;
    USE `PELICULES` ;
    
    -- -----------------------------------------------------
    -- Table `PELICULES`.`pelicula`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `PELICULES`.`pelicula` (
      `idpelicula` INT NOT NULL AUTO_INCREMENT,
      `titol` VARCHAR(45) NULL,
      `data_estreno` DATETIME NULL,
      `pressupost` FLOAT NULL,
      `pais` VARCHAR(45) NULL,
      PRIMARY KEY (`idpelicula`))
    ENGINE = InnoDB;
    
    
    SET SQL_MODE=@OLD_SQL_MODE;
    SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
    SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
    ";

    $conn->exec($sql);
    echo "Table created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>

</body>
</html>

