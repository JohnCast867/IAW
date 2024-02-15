<html>
<?php
class Base_de_datos_videojocs {

  public function connectar_bd ($servername,$username,$password)
  {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=VIDEOJOCS", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed2: " . $e->getMessage();
    }
    return $conn;
}

public function insertar_plataforma($servername, $username, $password, $nom) {
    
  $conn = $this->connectar_bd($servername,$username,$password);
    try {
        $sql = "INSERT INTO VIDEOJOCS.PLATAFORMA (nom) VALUES ('$nom')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "Registro insertado correctamente en la tabla plataforma con ID: " . $last_id . "<br>";
    } catch(PDOException $e) {
        echo "Error al insertar registro en la tabla plataforma: " . $e->getMessage();
    }
}

// Método para insertar valores en la tabla desarrollador
public function insertar_desarrollador($servername, $username, $password, $nom) {

  $conn = $this->connectar_bd($servername,$username,$password);
    try {
        $sql = "INSERT INTO VIDEOJOCS.DESENVOLUPADOR (nom) VALUES ('$nom')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "Registro insertado correctamente en la tabla desarrollador con ID: " . $last_id . "<br>";
    } catch(PDOException $e) {
        echo "Error al insertar registro en la tabla desarrollador: " . $e->getMessage();
    }
}

// Método para insertar valores en la tabla genero
public function insertar_genero($servername, $username, $password, $nom) {

  $conn = $this->connectar_bd($servername,$username,$password);
    try {
        $sql = "INSERT INTO VIDEOJOCS.GENERE (nom) VALUES ('$nom')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo "Registro insertado correctamente en la tabla genero con ID: " . $last_id . "<br>";
    } catch(PDOException $e) {
        echo "Error al insertar registro en la tabla genero: " . $e->getMessage();
    }
}
}

