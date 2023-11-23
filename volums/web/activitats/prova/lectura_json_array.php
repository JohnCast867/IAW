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

print_r($persones);

//exercici 2
function imprimir_array ($array) {
    echo "<table>";
    echo '<tr><td>'."Nom".'</td>';
    echo '<td>'."Edat".'</td>';
    echo '<td>'."Ciutat".'</td></tr>';
    foreach ($array as $persona => $value){
             echo "<tr><td>". $value['nom']."</td>
             <td>".$value ['edat']."</td>
            <td>" . $value['ciutat'] ."</td></tr>";
             }  
             echo "</table>";
                  echo '<style type="text/css">';
                  echo "table { border: 2px solid black } ";
                  echo "td{ border: 2px solid black;} ";
}



// echo "<table>";
// echo '<tr><td>'."Nom".'</td>';
// echo '<td>'."Edat".'</td>';
// echo '<td>'."Ciutat".'</td></tr>';
// foreach ($arrayAsociatiu as $persona => $value){
//     echo "<tr><td>". $value['nom']."</td>
//     <td>".$value ['edat']."</td>
//     <td>" . $value['ciutat'] ."</td></tr>";
//     }
//     echo "</table>";
//     echo '<style type="text/css">';
//     echo "table { border: 2px solid black } ";
//     echo "td{ border: 2px solid black;} ";


//exercici 3

function recuperar_nom_persones($array,&$noms) {

}



?> 

</body>
</html>