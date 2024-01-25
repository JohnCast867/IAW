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
    $stmt = $conn->prepare("SELECT * FROM CLIENT");
  $stmt->execute();
  $conn=null;

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
  $arrayValues = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  echo "<table wdith=\"100%\">\n";
  echo "<tr>\n";
  foreach ($arrayValues[0] as $key => $useless){
      echo "<th>$key</th>";
  }
  echo "</tr>";
  foreach ($arrayValues as $row){
      echo "<tr>";
      foreach ($row as $key => $val){
          echo "<td>$val</td>";
      }
      echo "</tr>\n";
  }
  echo "</table>\n";
  
  
  ?>

</body>
</html>