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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Listat d'assignatures</h2>
    <ul>
        <?php foreach ($assignatures as $assignatura): ?>
            <li><?php echo $assignatura['nom'] ?> - <?php echo $assignatura['curs'] ?> - <?php echo $assignatura['hores_setmanals'] ?> </li> <!-- Corrección aquí -->
        <?php endforeach; ?>
    </ul>

    <h2>Formulari d'alta d'assignatures</h2>
    <form action="alta.php" method="post">
    <label for="nom">Nom de l'assignatura:</label><br>
    <input type="text" id="nom" name="nom" required><br><br>
    <label>Curs:</label><br>
    <input type="checkbox" name="curs[]" value="1rESO"> 1r ESO<br>
    <input type="checkbox" name="curs[]" value="2nESO"> 2n ESO<br>
    <input type="checkbox" name="curs[]" value="3rESO"> 3r ESO<br>
    <input type="checkbox" name="curs[]" value="4tESO"> 4t ESO<br><br>
    <label for="hores">Hores de l'assignatura:</label><br>
    <input type="text" id="hores" name="hores" required><br><br>
    <input type="submit" value="Insertar">
</form>
    
</body>
</html>
    <?php
}

altaAssignatura();
?>
