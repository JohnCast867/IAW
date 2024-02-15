<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Videojuego</title>
</head>
<body>
    <h2>Insertar Nuevo Videojuego</h2>
    <form action="insertar_videojuego.php" method="POST">
        <label for="DESENVOLUPADOR_id">Desarrollador:</label>
        <input type="text" id="DESENVOLUPADOR_id" name="DESENVOLUPADOR_id" required><br><br>

        <label for="nom">nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma" required><br><br>

        <label for="data_llançament">data_llançament:</label>
        <input type="date" id="data_llançament" name="data_llançament" required><br><br>

        <label for="peg">PEGI:</label>
        <input type="text" id="peg" name="peg" required><br><br>

        <input type="submit" value="Insertar Videojuego">
    </form>
</body>
</html>

