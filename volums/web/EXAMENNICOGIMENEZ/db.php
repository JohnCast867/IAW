<?php
include_once "asignatura.php";
include_once "db.php";
class BaseDeDades {
    private $servername = "db";
    private $username = "root";
    private $password = "politecnic";
    public $conn;

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=assignatures", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br><br>";
        } catch (PDOException $e) {
            echo "Connection failed2: " . $e->getMessage();
        }

        return $this->conn;
    }


    public function eliminarAssignatura($nom, $curs) {
        $sql = "DELETE FROM assignatures WHERE nom='$nom' AND curs='$curs'";
        return $this->conn->query($sql);
    }

    public function exportarDades() {
        $sql = "SELECT * FROM assignatures ORDER BY nom";
        $result = $this->conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return json_encode($data);
    }

    public function getTotalAssignatures() {
        $sql = "SELECT COUNT(*) AS total FROM assignatures";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    

    public function closeConnection() {
        $this->conn->close();
    }
}
?>

