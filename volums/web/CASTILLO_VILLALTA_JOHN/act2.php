<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 2</h1>

<?php

function unirArrays($array1, $array2, $arrayIndexada) {
    $resultat = array();
    foreach ($arrayIndexada as $info) {
        $resultat[] = array(
            $info,
            $array1[$info],
            $array2[$info]
        );
    }

    return $resultat;
}

//funcion tabla array resultat
$dadesTabla = function($fila) {
    echo "<tr>";
    foreach ($fila as $element) {
        echo "<td>" . $element . "</td>";
        }
        echo "</tr>\n";
        };
        

$datesNaixement = array(
    "123456789" => "1990-05-15",
    "987654321" => "1985-08-22",
    "456789012" => "1998-03-10",
    "321098765" => "1976-11-28",
    "789012345" => "2002-07-05",
    "543210987" => "1994-02-18",
    "210987654" => "1980-09-03",
    "876543210" => "2005-12-12",
    "234567890" => "1999-06-25",
    "890123456" => "1972-04-07"
);

$noms = array(
    "123456789" => "Mora Barceló, Joana",
    "456789012" => "Barceló Adrover, Maria",
    "321098765" => "Sànchez López, Margalida",
    "789012345" => "Oliver Montserrat, Paula",
    "210987654" => "Mora Llaneres, Falou",
    "876543210" => "Nadal Barceló, Miquel",
    "234567890" => "Sastre Julià, Joana",
    "543210987" => "Mora Ferrà, Toni",
    "987654321" => "Nicolau Martorell, Xim",
    "890123456" => "Bibiloni Sagreres, Bàrbara"
);

$arrayIndexada = array(
    "123456789",
    "987654321",
    "456789012",
    "321098765",
    "789012345",
    "543210987",
    "210987654",
    "876543210",
    "234567890",
    "890123456"
);

$resultat = unirArrays($datesNaixement, $noms, $arrayIndexada);

echo "Resultat:\n";
print_r($resultat);


?>


</body>

</html>