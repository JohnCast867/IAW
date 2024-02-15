<html>
<?php
include "db.php";
try {
    // sql to create table
    $sql = "-- MySQL Workbench Forward Engineering

    SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
    SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
    SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
    
    -- -----------------------------------------------------
    -- Schema mydb
    -- -----------------------------------------------------
    -- -----------------------------------------------------
    -- Schema VIDEOJOCS
    -- -----------------------------------------------------
    
    -- -----------------------------------------------------
    -- Schema VIDEOJOCS
    -- -----------------------------------------------------
    CREATE SCHEMA IF NOT EXISTS `VIDEOJOCS` ;
    USE `VIDEOJOCS` ;
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`DESENVOLUPADOR`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`DESENVOLUPADOR` (
      `id` INT(11) NOT NULL,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`))
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`GENERE`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`GENERE` (
      `id` INT(11) NOT NULL,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`))
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`PLATAFORMA`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`PLATAFORMA` (
      `id` INT(11) NOT NULL,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      PRIMARY KEY (`id`))
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`VIDEOJOC`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`VIDEOJOC` (
      `id` INT(11) NOT NULL,
      `nom` VARCHAR(45) NULL DEFAULT NULL,
      `data_llançament` DATE NULL DEFAULT NULL,
      `pegi` INT(11) NULL DEFAULT NULL,
      `DESENVOLUPADOR_id` INT(11) NOT NULL,
      PRIMARY KEY (`id`),
      INDEX `fk_VIDEOJOC_DESENVOLUPADOR_idx` (`DESENVOLUPADOR_id` ASC) VISIBLE,
      CONSTRAINT `fk_VIDEOJOC_DESENVOLUPADOR`
        FOREIGN KEY (`DESENVOLUPADOR_id`)
        REFERENCES `VIDEOJOCS`.`DESENVOLUPADOR` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`VIDEOJOC_PLATAFORMA`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`VIDEOJOC_PLATAFORMA` (
      `VIDEOJOC_id` INT(11) NOT NULL,
      `PLATAFORMA_id` INT(11) NOT NULL,
      PRIMARY KEY (`VIDEOJOC_id`, `PLATAFORMA_id`),
      INDEX `fk_VIDEOJOC_has_PLATAFORMA_PLATAFORMA1_idx` (`PLATAFORMA_id` ASC) VISIBLE,
      INDEX `fk_VIDEOJOC_has_PLATAFORMA_VIDEOJOC1_idx` (`VIDEOJOC_id` ASC) VISIBLE,
      CONSTRAINT `fk_VIDEOJOC_has_PLATAFORMA_PLATAFORMA1`
        FOREIGN KEY (`PLATAFORMA_id`)
        REFERENCES `VIDEOJOCS`.`PLATAFORMA` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
      CONSTRAINT `fk_VIDEOJOC_has_PLATAFORMA_VIDEOJOC1`
        FOREIGN KEY (`VIDEOJOC_id`)
        REFERENCES `VIDEOJOCS`.`VIDEOJOC` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
    -- Table `VIDEOJOCS`.`videojoc_genere`
    -- -----------------------------------------------------
    CREATE TABLE IF NOT EXISTS `VIDEOJOCS`.`videojoc_genere` (
      `VIDEOJOC_id` INT(11) NOT NULL,
      `GENERE_id` INT(11) NOT NULL,
      PRIMARY KEY (`VIDEOJOC_id`, `GENERE_id`),
      INDEX `fk_VIDEOJOC_has_GENERE_GENERE1_idx` (`GENERE_id` ASC) VISIBLE,
      INDEX `fk_VIDEOJOC_has_GENERE_VIDEOJOC1_idx` (`VIDEOJOC_id` ASC) VISIBLE,
      CONSTRAINT `fk_VIDEOJOC_has_GENERE_GENERE1`
        FOREIGN KEY (`GENERE_id`)
        REFERENCES `VIDEOJOCS`.`GENERE` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
      CONSTRAINT `fk_VIDEOJOC_has_GENERE_VIDEOJOC1`
        FOREIGN KEY (`VIDEOJOC_id`)
        REFERENCES `VIDEOJOCS`.`VIDEOJOC` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    SET SQL_MODE=@OLD_SQL_MODE;
    SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
    SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
    ";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>