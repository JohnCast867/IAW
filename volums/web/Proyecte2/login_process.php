<?php
session_start();
require_once('DBACCES.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->rowCount() == 1) {
        $_SESSION['username'] = $username;
        header("location: index.php"); 
    } else {
        header("location: login.php");
    }
}
?>
