<!DOCTYPE html>
<html>
<body>
<?php

//exercici 1
function carrega_fitxer($nomfitxer, &$arrayAsociatiu2) {
    $jsonString = file_get_contents($nomfitxer);
    $arrayAsociatiu2 = json_decode($jsonString, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error  JSON: ' . json_last_error_msg());
    }
}

$persones = array();
carrega_fitxer("prova_json.json", $persones);

//print_r($persones);

//exercici 2
function imprimirarrayPersones ($array)
{
    echo "<table>";
    foreach ($array as $fila)
    {
        echo "<tr>";
        echo "<td>";
        echo $fila["nom"];
        echo "</td>";
        echo "<td>";
        echo $fila["edat"];
        echo "</td>";
        echo "<td>";
        echo $fila["ciutat"];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
echo "Exercici 2";
echo "<br>";
imprimirarrayPersones($persones);
echo "<br>";


//exercici 3

function recuperarNomsPersones ($array, &$arrayNoms)
{
    foreach ($array as $fila)
    {
        array_push($arrayNoms,$fila["nom"]);
    }
}
echo "Exercici 3";
echo "<br>";
$resultatNoms= array();
recuperarNomsPersones($persones,$resultatNoms);
var_dump($resultatNoms);
echo "<br>";
echo "<br>";

//exercici 4
function existeixPersona ($array, $nom)
{
    foreach ($array as $fila)
    {
        if ($fila["nom"]== $nom)
        {
            return 1;
        }
    }
    return 0;
}

echo "Exercici 4";
echo "<br>";
$nom_a_cercar="Toni";
$trobat= existeixPersona($persones,$nom_a_cercar);
if ($trobat==0)
    echo "No hi és";
else    
    echo "Hi és"; 


?> 

</body>
</html>