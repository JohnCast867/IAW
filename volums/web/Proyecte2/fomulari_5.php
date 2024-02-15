<!DOCTYPE html>
<html>
<head>
    <title>Formulario Videojuego</title>
</head>
<body>

<h2>Insertar Nuevo Videojuego</h2>

<form action="insertar_videojuego.php" method="post">
    <label for="nombre">Nom:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>

    <label for="Desenvolupador">Desenvolupador:</label><br>
    <input type="text" id="Desenvolupador" name="Desenvolupador"><br><br>

    <label for="plataforma">Plataforma:</label><br>
    <input type="text" id="plataforma" name="plataforma"><br><br>

    <label for="Llançament">Llançament:</label><br>
    <input type="date" id="Llançament" name="Llançament"><br><br>

    <label for="pegi">PEGI:</label><br>
    <select id="pegi" name="pegi">
        <option value="3">3</option>
        <option value="7">7</option>
        <option value="12">12</option>
        <option value="16">16</option>
        <option value="18">18</option>
    </select><br><br>

    <input type="submit" value="Insertar">
</form>

</body>
</html>
