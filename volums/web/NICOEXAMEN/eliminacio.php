<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
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
</body>
</html>



