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
  try {
    $sql = "DELETE FROM CLIENT WHERE id=2";
    $conn->exec($sql);
    echo "Record deleted successfully";

    $sql = "UPDATE CLIENT SET llinatge2='WAZAA' WHERE id=1";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";

  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>

</body>
</html>