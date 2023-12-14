<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 1</h1>

<?php

function filtrargentperany($datesNaixement, $noms, $anyInici, $anyFi) {
    $filtrePersones = array();

    foreach ($datesNaixement as $dni => $dataNaixement) {
        $anyNaixement = date("Y", strtotime($dataNaixement));

        if ($anyNaixement >= $anyInici && $anyNaixement <= $anyFi) {
            $filtrePersones[$dni] = $noms[$dni];
        }
    }

    return $filtrePersones;
}

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

$anyInici = 1990;
$anyFi = 2010;
$resultat = filtrargentperany($datesNaixement, $noms, $anyInici, $anyFi);


echo "Persones nascudes entre els anys $anyInici i $anyFi:\n";
echo "<br>";

foreach ($resultat as $dni => $nombre) {
    echo "$dni - $nombre\n";
    echo "<br>";
    }



?>


</body>

</html>