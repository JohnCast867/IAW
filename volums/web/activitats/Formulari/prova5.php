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

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
Nom: <input type="text" name="name"><br>
Llinatge1: <input type="text" name="Llinatge1"><br>
Llinatge2: <input type="text" name="Llinatge2"><br>
Poblacio: <br>
<input type="radio" id="1" name="poblacio" value="Manacor">
<label for="1">Manacor</label><br>
<input type="radio" id="2" name="poblacio" value="Palma">
<label for="2">Palma</label><br>
Aficions: <br>
<input type="checkbox" id="aficio1" name="aficio1" value="aficio1">
<label for="aficio1">aficio1</label><br>
<input type="checkbox" id="aficio2" name="aficio2" value="aficio2">
<label for="aficio2">aficio2</label><br>

<label for="centre">Centre:</label>
  <select name="centre" id="centre">
    <option value="Centre1">Centre1</option>
    <option value="Centre2">Centre2</option>
    <option value="Centre3">Centre3</option>
    <option value="Centre4">Centre4</option>
  </select>

<input type="submit">
</form>

<?php
if (($_SERVER["REQUEST_METHOD"] == "GET") && ($_GET["name"]!= null)){
  $name = test_input($_GET["name"]);
  $llinatge1 = test_input($_GET["Llinatge1"]);
  $llinatge2 = test_input($_GET["Llinatge2"]);
  $poblacions = test_input($_GET["poblacio"]);
  $aficion1 = test_input($_GET["aficio1"]);
  $aficion2 = test_input($_GET["aficio2"]);
  $centres = test_input($_GET["centre"]);

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $llinatge1;
echo "<br>";
echo $llinatge2;
echo "<br>";
echo $poblacions;
echo "<br>";
echo $aficion1;
echo "<br>";
echo $aficion2;
echo "<br>";
echo $centres;

}
?>

</body>
</html>