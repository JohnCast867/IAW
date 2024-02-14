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

<?php include "db.php";
include "act5.php";
$client1 = new Client();

try {
  $stmt = $client1->consultaTots($servername, $username, $password);
  while ($row = $stmt->fetch()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Nom: " . $row['nom'] . "<br>";
    echo "Llinatge1: " . $row['llinatge1'] . "<br>";
    echo "Llinatge2: " . $row['llinatge2'] . "<br>";
    echo "Email: " . $row['email'] . "<br><br>";
}
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
  
?>

</body>
</html>