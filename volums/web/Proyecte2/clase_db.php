<html>
<?php
class Base_de_datos_videojocs {

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

public function consulta($servername, $username, $password, $entidad) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "SELECT * FROM VIDEOJOCS.$entidad";
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
}

public function eliminar($servername, $username, $password, $entidad) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "DELETE FROM VIDEOJOCS.$entidad";
      $result = $conn->exec($sql);
      
      if ($result !== false) {
          echo "<p>Se han eliminado todos los registros de $entidad correctamente.</p>";
      } else {
          echo "<p>No se pudo eliminar los registros de $entidad.</p>";
      }
  } catch(PDOException $e) {
      echo "Error al eliminar los datos: " . $e->getMessage();
  }
}

public function insertar_joc($servername, $username, $password, $nom, $data_llançament, $pegi, $desenvolupador_id) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "INSERT INTO VIDEOJOCS.VIDEOJOC (nom, data_llançament, pegi, desenvolupador_id) 
              VALUES ('$nom', '$data_llançament', '$pegi', '$desenvolupador_id')";
      $conn->exec($sql);
      $last_id = $conn->lastInsertId();
      echo "Registro insertado correctamente en la tabla joc con ID: " . $last_id . "<br>";
  } catch(PDOException $e) {
      echo "Error al insertar registro en la tabla joc: " . $e->getMessage();
  }
}


public function eliminar_joc($servername, $username, $password, $nom, $data_llançament) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "DELETE FROM VIDEOJOC WHERE nom = '$nom' AND data_llançament = '$data_llançament'";

      $conn->exec($sql);
      $last_id = $conn->lastInsertId();
      echo "Videojoc " . $nom . " eliminat correctament de la taula VIDEOJOCS <br>";
  } catch(PDOException $e) {
      echo "Error al insertar registro en la tabla joc: " . $e->getMessage();
  }
}

public function consulta_juego_por_nombre($servername, $username, $password, $nom) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "SELECT * FROM VIDEOJOC WHERE nom = '$nom'";
      $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de juegos por nombre:</h3>";
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

public function consulta_juego_por_fecha($servername, $username, $password, $fecha_llançament) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "SELECT * FROM VIDEOJOC WHERE data_llançament = '$fecha_llançament'";
      $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de juegos por fecha de lanzamiento:</h3>";
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

public function consulta_juego_por_desenvolupador($servername, $username, $password, $desenvolupador) {
  $conn = $this->connectar_bd($servername, $username, $password);
  try {
      $sql = "SELECT v.* FROM VIDEOJOC v 
              JOIN DESENVOLUPADOR d ON v.desenvolupador_id = d.id 
              WHERE d.nom = '$desenvolupador'";
      $result = $conn->query($sql);
      
      echo "<h3>Resultados de la consulta de juegos por desarrollador:</h3>";
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

public function login($servername, $username, $password, $username1, $password1) {
    $conn = $this->connectar_bd($servername, $username, $password);
    try {
        $stmt = $conn->prepare("SELECT * FROM VIDEOJOCS.users WHERE user = :user");
        $stmt->bindParam(':user', $username1);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verify the password
            if (password_verify($password1, $row['password'])) {
                return true;
            } else {
                echo "Contraseña incorrecta.";
                return false;
            }
        } else {
            echo "El usuario '$username1' no existe.";
            return false;
        }
    } catch(PDOException $e) {
        echo "Error al realizar el inicio de sesión: " . $e->getMessage();
        return false;
    }
}


}