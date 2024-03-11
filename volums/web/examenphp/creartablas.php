<?php
include 'db.php';

try {
    $sql = "-- MySQL Workbench Forward Engineering

    SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
    SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
    SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
    
    -- -----------------------------------------------------
    -- Schema PELICULAS
    -- -----------------------------------------------------
    
    CREATE SCHEMA IF NOT EXISTS `PELICULAS` ;
    USE `PELICULAS` ;
    
    -- Table `PELICULAS`.`TITOL`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `TITOL` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

    -- Table `PELICULAS`.`DATA_ESTRENA`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `DATA_ESTRENA` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

    -- Table `PELICULAS`.`PRESSUPOST`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `PRESSUPOST` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

    -- Table `PELICULAS`.`PAIS`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `PAIS` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

    -- Table `PELICULAS`.`PELICULAS`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `PELICULAS` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `titulo` VARCHAR(255) NOT NULL,
      `fecha_estreno` DATE NOT NULL,
      `presupuesto` DECIMAL(10,2) NOT NULL,
      `pais_id` INT(11) NOT NULL,
      PRIMARY KEY (`id`),
      FOREIGN KEY (`pais_id`) REFERENCES `PAIS`(`id`)
    ) ENGINE = InnoDB;

    SET SQL_MODE=@OLD_SQL_MODE;
    SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
    SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
";

    $conn->exec($sql);
    echo "Tables created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
  
$conn = null;

?>
