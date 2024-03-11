<html>
<style>
    body {
        margin: 4%;
    }

    input {
        margin-bottom: 10px;
    }
</style>

<body>
    <a href="index.php">Volver al indice</a>
    <br><br>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        Título: <input type="text" name="titulo" required><br>
        Fecha de estreno (Formato "Y/m/d"): <input type="text" name="fecha" required><br>
        Presupuesto: <input type="text" name="presupuesto" required><br>
        País <br>
        <input type="radio" id="españa" name="pais" value="SPAIN">
        <label for="palma">España</label><br>
        <input type="radio" id="inglaterra" name="pais" value="ENGLAND">
        <label for="bcn">Inglaterra</label><br>
        <input type="radio" id="eeuu" name="pais" value="US">
        <label for="madrid">Estados Unidos</label><br><br>
        <input type="submit">
    </form>

    <?php
    include_once "bd.php";
    include_once "pelicula.php";
    $conexion = new basededades();
    $titulo = $fechaEstreno = $presupuesto = $pais = "";    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["titulo"] != null) {
        $titulo = test_input($_GET["titulo"]);
        $fechaEstreno = test_input($_GET["fecha"]);
        $presupuesto = test_input($_GET["presupuesto"]);
        $pais = test_input($_GET["pais"]);
        $pelicula = new Pelicula($titulo, $fechaEstreno, $presupuesto, $pais);
        $conexion->comprobarExistePelicula($pelicula);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

</body>

</html>