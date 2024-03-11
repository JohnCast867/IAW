<?php
include "bd.php";
$consulta = new basededades();
if (isset($_POST['exportar'])) {
    $consulta->exportacionajson();
    echo '<p>Exportación realizada</p>';
}
?>

<html>
<body>
    <a href="index.php">Volver al indice</a><br><br>
    <form method="post">
        <button type="submit" name="exportar">Exportar Datos</button>
    </form>
</body>

</html>