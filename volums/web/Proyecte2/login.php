<?php
    include "DBACCES.php";
    include "clase_db.php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión con la base de datos: " . $conn->connect_error);
}

session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user='$user' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Usuario o contraseña incorrectos";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php
if (isset($error_message)) {
    echo "<p style='color:red;'>$error_message</p>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Usuario: <input type="text" name="user" required><br>
    Contraseña: <input type="password" name="password" required><br>
    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
