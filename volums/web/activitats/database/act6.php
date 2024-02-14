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
include "act5.php";
if (($_SERVER["REQUEST_METHOD"] == "GET") && ($_GET["name"]!= null)){
  $nom = test_input($_GET["name"]);
  $llinatge1 = test_input($_GET["Llinatge1"]);
  $llinatge2 = test_input($_GET["Llinatge2"]);
  $email = test_input($_GET["email"]);
}
$client = new Client();
$client -> inserir($servername,$username,$password,$nom,$llinatge1,$llinatge2,$email);

?>


</body>
</html>