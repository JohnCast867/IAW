<html>
<?php
include "db.php";

try {
  $sql = "CREATE DATABASE prova11";
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
</html>