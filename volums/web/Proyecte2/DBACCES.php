<?php
   $servername = "db";
   $username = "root";
   $password = "politecnic";
   
   try {
     $conn = new PDO("mysql:host=$servername;dbname=VIDEOJOCS", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully <br>";
   } catch(PDOException $e) {
     echo "Connection failed2: " . $e->getMessage();
   }
   ?>