<?php
include_once 'basededades.php';
include "DBACCES.php";
include "clase_db.php";
include 'funciones.php';
generarHTML();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["exportar"])) {
    $basededades = new basededades();

    $datos_json = $basededades->exportarAsignaturas();

    echo "Exportación realizada";
    echo "<pre>" . json_encode($datos_json, JSON_PRETTY_PRINT) . "</pre>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="exportar" value="Exportar datos">
</form>

<a href="index.php">Volver a la página principal</a>
