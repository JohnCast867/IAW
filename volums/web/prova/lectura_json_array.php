<!DOCTYPE html>
<html>
<body>
<?php

$jsonString = file_get_contents('prova_json.json');


$arrayAsociatiu = json_decode($jsonString, true);

// Verifica si hay errores durante la decodificación
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error  JSON: ' . json_last_error_msg());
}


print_r($arrayAsociatiu);


?> 

</body>
</html>