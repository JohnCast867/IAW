<?php
session_start();
require_once('DBACCES.php'); // Incluye el archivo de acceso a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->rowCount() == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php"); // Redirecciona al usuario a la página de bienvenida
    } else {
        echo "Invalid username or password";
    }
}
?>
