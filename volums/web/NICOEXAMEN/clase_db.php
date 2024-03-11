<?php
class basededades {
    private $servername = "db";
    private $username = "root";
    private $password = "politecnic";
    private $dbname = "assignatures";

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        // Cerrar la conexión
        $this->conn->close();
    }

    public function insertarAsignatura($nom, $curs, $hores_setmanals) {
        $stmt = $this->conn->prepare("INSERT INTO assignatures (nom, curs, hores_setmanals) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nom, $curs, $hores_setmanals);

        $resultado = $stmt->execute();

        $stmt->close();

        return $resultado;
    }
    public function eliminarAsignatura($nom, $curs) {
        $stmt = $this->conn->prepare("DELETE FROM assignatures WHERE nom = ? AND curs = ?");
        $stmt->bind_param("ss", $nom, $curs);

        $resultado = $stmt->execute();

        $stmt->close();

        return $resultado;
    }
    public function exportarAsignaturas() {
        $sql = "SELECT * FROM assignatures ORDER BY nom";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $asignaturas = array();

            while ($row = $result->fetch_assoc()) {
                $asignatura = array(
                    'nom' => $row['nom'],
                    'curs' => $row['curs'],
                    'hores_setmanals' => $row['hores_setmanals']
                );
                $asignaturas[] = $asignatura;
            }

            return $asignaturas;
        } else {
            return array();
        }
    }
}
?>
