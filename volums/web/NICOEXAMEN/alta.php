
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

function altaAssignatura() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $hores_setmanals = $_POST['hores_setmanals'];
        $cursos = isset($_POST['curs']) ? $_POST['curs'] : array();

        $registros_insertados = 0;

        $basededades = new basededades();

        foreach ($cursos as $curso) {
            $resultado_insert = $basededades->insertarAsignatura($nom, $curso, $hores_setmanals);
            if ($resultado_insert) {
                $registros_insertados++;
            }
        }

        echo "Se han insertado $registros_insertados registros en la base de datos.";
    }

    
    ?>
<h2>Listat d'assignatures</h2>
    <ul>
        <?php foreach ($assignatures as $assignatura): ?>
            <li><?php echo $assignatura['nom'] ?> - <?php echo $assignatura['curs'] ?> - <?php echo $assignatura['hores_setmanals'] ?> </li> <!-- Corrección aquí -->
        <?php endforeach; ?>
    </ul>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nom: <input type="text" name="nom"><br>
        Hores setmanals: <input type="text" name="hores_setmanals"><br>
        Curs:
        <input type="checkbox" name="curs[]" value="1r ESO"> 1r ESO
        <input type="checkbox" name="curs[]" value="2n ESO"> 2n ESO
        <input type="checkbox" name="curs[]" value="3r ESO"> 3r ESO
        <input type="checkbox" name="curs[]" value="4t ESO"> 4t ESO<br>
        <input type="submit" name="insertar" value="Insertar">
    </form>

    <?php
}

altaAssignatura();

?>

</body>
</html>
