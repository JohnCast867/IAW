<html>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="Get">
Nom: <input type="text" name="name"><br>
Llinatge1: <input type="text" name="Llinatge1"><br>
Llinatge2: <input type="text" name="Llinatge2"><br>
Poblacio: <br>
<input type="radio" id="1" name="poblacio" value="Manacor">
<label for="1">Manacor</label><br>
<input type="radio" id="2" name="poblacio" value="Palma">
<label for="2">Palma</label><br>
Aficions: <br>
<input type="checkbox" id="aficio1" name="aficio[]" value="aficio1">
<label for="aficio1">aficio1</label><br>
<input type="checkbox" id="aficio2" name="aficio[]" value="aficio2">
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


</body>
</html>