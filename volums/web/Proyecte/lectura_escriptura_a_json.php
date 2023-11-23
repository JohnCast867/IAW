<!DOCTYPE html>
<html>

<body>
<?php

/*Exercici1 */
function carregaFitxerAArray ($nomfitxer, &$arrayAsso)
{
    $jsonString = file_get_contents($nomfitxer);
    $arrayAsso = json_decode($jsonString, true);

    if (json_last_error() !== JSON_ERROR_NONE) 
    {
        die('Error  JSON: ' . json_last_error_msg());
    }
}

function carregaArrayAFitxer ($nomfitxer,$arrayAsso)
{

// Convertir array a format JSON
$json_dades = json_encode($arrayAsso, JSON_PRETTY_PRINT);

echo "array convertit a json";
// Desar el format JSON a un arxiu JSON
file_put_contents($nomfitxer, $json_dades);

}

// Provam càrrega fitxer a array
$persones = array();
carregaFitxerAArray("prova_json.json",$persones);
print_r ($persones);

//Provam càrrega array a fitxer
carregaArrayAFitxer("output.json", $persones);
echo "Comprova que el fitxer output.json ha estat
creat amb dades";
?> 



</body>
</html>