<?php
   $servername = "db";
   $username = "root";
   $password = "politecnic";
   
   try {
     $conn = new PDO("mysql:host=$servername;dbname=PELICULES", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
     echo "Connection failed2: " . $e->getMessage();
   }
   ?>