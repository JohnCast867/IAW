<?php
    include_once 'basededades.php';
    include "DBACCES.php";
    include "clase_db.php";
    include 'funciones.php';
    generarHTML();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $curs = $_POST['curs'];
    
        $basededades = new basededades();
    
        $resultado_eliminar = $basededades->eliminarAsignatura($nom, $curs);
    
        if ($resultado_eliminar) {
            echo "Se ha eliminado la asignatura de la base de datos.";
        } else {
            echo "No se pudo eliminar la asignatura de la base de datos.";
        }
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nom de l'assignatura a eliminar: <input type="text" name="nom"><br>
        Curs:
        <select name="curs">
            <option value="1r ESO">1r ESO</option>
            <option value="2n ESO">2n ESO</option>
            <option value="3r ESO">3r ESO</option>
            <option value="4t ESO">4t ESO</option>
        </select><br>
        <input type="submit" name="eliminar" value="Eliminar">
    </form>
    