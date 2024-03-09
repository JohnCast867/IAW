<html>
<?php
class basededades {

  public function connectar_bd ($servername,$username,$password)
  {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=VIDEOJOCS", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed2: " . $e->getMessage();
    }
    return $conn;
}


public function consulta($servername, $username, $password) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
    $sql = "SELECT * FROM PELICULES.pelicula order by 'titol'";
    $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de:</h3>";
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
}

public function consulta2($servername, $username, $password) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
    $sql = "SELECT * FROM PELICULES.pelicula where pressupost < 1000000";
    $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de:</h3>";
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
}

public function donar_alta($servername, $username, $password, $titol, $data_llançament, $pressupost, $pais) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "INSERT INTO PELICULES.pelicula (titol, data_estreno, pressupost, pais) 
              VALUES ('$titol', '$data_llançament', '$pressupost', '$pais')";
      $conn->exec($sql);
      $last_id = $conn->lastInsertId();
      echo "Registro insertado correctamente en la tabla pelicula con ID: " . $last_id . "<br>";
  } catch(PDOException $e) {
      echo "Error al insertar registro en la tabla pelicula: " . $e->getMessage();
  }
}




}