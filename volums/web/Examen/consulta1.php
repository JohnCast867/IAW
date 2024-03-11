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
    include "DBACCES.php";
    include 'funciones.php';
    include 'clase_db.php';
    generarHTML();

    
    try {
      $sql = "SELECT * FROM PELICULES.pelicula order by 'titol'";
      $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de $entidad:</h3>";
      echo "<table border='1'>";
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          foreach ($row as $columna => $valor) {
              echo "<td>".$columna.": ".$valor."</td>";
          }
          echo "</tr>";
      }
      echo "</table>";
  } catch(PDOException $e) {
      echo "Error al seleccionar los datos: " . $e->getMessage();
  }

$conn = null;

?>

</body>
</html>
