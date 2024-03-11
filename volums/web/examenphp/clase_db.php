<?php
class basededades {
    private $conn; // Define class property to hold the connection

    public function connectar_bd ($servername,$username,$password)
    {
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=PELICULAS", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            #echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed2: " . $e->getMessage();
        }
        return $this->conn;
    }

    public function insertarPelicula($titol, $data_estrena, $pressupost, $pais) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO peliculas (titol, data_estrena, pressupost, pais) VALUES (:titol, :data_estrena, :pressupost, :pais)");
            $stmt->bindParam(':titol', $titol);
            $stmt->bindParam(':data_estrena', $data_estrena);
            $stmt->bindParam(':pressupost', $pressupost);
            $stmt->bindParam(':pais', $pais);
            $stmt->execute();
            echo "Película insertada correctamente.";
        } catch(PDOException $e) {
            echo "Error al insertar la película: " . $e->getMessage();
        }
    }

    public function listarPeliculasPorNombre() {
        $stmt = $this->conn->query("SELECT * FROM peliculas ORDER BY titol");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarPeliculasPresupuestoMenor($presupuestoMaximo) {
        $stmt = $this->conn->prepare("SELECT * FROM peliculas WHERE pressupost < :pressupost");
        $stmt->bindParam(':pressupost', $presupuestoMaximo);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function exportarPeliculasJSON() {
        $stmt = $this->conn->query("SELECT * FROM peliculas");
        $peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($peliculas);
        file_put_contents('peliculas.json', $json);
        echo "Exportación realizada.";
    }
}
?>



  