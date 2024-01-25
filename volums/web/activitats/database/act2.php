<html>
<body>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
Nom: <input type="text" name="name"><br>
Llinatge1: <input type="text" name="Llinatge1"><br>
Llinatge2: <input type="text" name="Llinatge2"><br>
email: <input type="text" name="email"><br><br>
<input type="submit">
</form>

<?php include "db.php";
if (($_SERVER["REQUEST_METHOD"] == "GET") && ($_GET["name"]!= null)){
  $name = test_input($_GET["name"]);
  $llinatge1 = test_input($_GET["Llinatge1"]);
  $llinatge2 = test_input($_GET["Llinatge2"]);
  $email = test_input($_GET["email"]);
 
  try {
    
    $sql = "INSERT INTO CLIENT (nom, llinatge1, llinatge2, email)
    VALUES ('$name', '$llinatge1', '$llinatge2', '$email')";
    $conn->exec($sql);
    echo "New record created successfully";
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;  
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

}

?>


</body>
</html>