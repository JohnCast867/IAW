<html>
<?php
include "db.php";
try {
    // sql to create table
    $sql = "CREATE TABLE VIDEOJOC (
      id INT PRIMARY KEY,
      nom VARCHAR(255),
      data_llançament DATE,
      pegi INT
    )";

    a
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>