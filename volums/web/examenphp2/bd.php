<?php
include_once "pelicula.php";
class basededades
{
    private $servername = "db";
    private $username = "root";
    private $password = "politecnic";
    public $conn;

    public function conectar()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=PELICULAS", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br><br>";
        } catch (PDOException $e) {
            echo "Connection failed2: " . $e->getMessage();
        }

        return $this->conn;
    }
    public function insertPelicula($pelicula)
    {
        $conn = $this->conectar();
        $titulo = $pelicula->getTitulo();
        $fecha = $pelicula->getDataEstreno();
        $presupuesto = $pelicula->getPressupost();
        $pais = $pelicula->getPais();
        try {
            $sql = "INSERT INTO PELICULA (titol, dataEstreno, pressupost, pais)
            VALUES ('$titulo', '$fecha', '$presupuesto', '$pais')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    }
    public function comprobarExistePelicula($pelicula)
    {
        $titulo = $pelicula->getTitulo();
        $conn = $this->conectar();

        try {
            $stmt = $conn->prepare("SELECT * FROM PELICULA WHERE titol = '$titulo'");
            $stmt->execute();
            if ($stmt->rowCount() == 0) {
                $this->insertPelicula($pelicula);
                exit();
            } else {
                echo "Aquesta película ja existeix i no será donada d’alta";
            }
            $conn = null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function consultaPeliculas()
    {
        $conn = $this->conectar();

        try {
            $stmt = $conn->prepare("SELECT * FROM PELICULA");
            $stmt->execute();
            $conn = null;
            return($stmt);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function consultarPeliculasPresupuesto()
    {
        $conn = $this->conectar();

        try {
            $stmt = $conn->prepare("SELECT * FROM PELICULA WHERE pressupost < 1000000");
            $stmt->execute();
            $conn = null;
            return($stmt);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function ordenarPorNombre()
    {
        $tabla = $this->consultaPeliculas();
        $tablaArray = $tabla->fetchAll(PDO::FETCH_ASSOC);
        sort($tablaArray);

        echo "<table>";
        echo "<tr>";
        foreach ($tablaArray[0] as $key => $value) {
            echo "<th>" . $key . "</th>";
        }
        echo "</tr>";

        foreach ($tablaArray as $fila) {
            echo "<tr>";
            foreach ($fila as $key => $value) {
                echo "<td>" . $value . '</td>';
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    public function ordenarPorPresupuesto()
    {
        $tabla = $this->consultarPeliculasPresupuesto();
        $tablaArray = $tabla->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<tr>";
        foreach ($tablaArray[0] as $key => $value) {
            echo "<th>" . $key . "</th>";
        }
        echo "</tr>";

        foreach ($tablaArray as $fila) {
            echo "<tr>";
            foreach ($fila as $key => $value) {
                echo "<td>" . $value . '</td>';
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    public function exportacionajson()
    {
        $tabla = $this->consultaPeliculas();
        $tablaArray = $tabla->fetchAll(PDO::FETCH_ASSOC);

        $jsonDatos = json_encode($tablaArray, JSON_PRETTY_PRINT);
        file_put_contents("datos.json", $jsonDatos);
        echo $jsonDatos;
    }
}
