<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 3</h1>

<?php

function crearHistorigrama($notes) {
    $histograma = array_fill(0, 11, 0);

    foreach ($notes as $nota) {
        $histograma[$nota]++;
    }

    return $histograma;
}

$notes = array(
    "123456789" => 8,
    "456789012" => 5,
    "321098765" => 9,
    "789012345" => 7,
    "210987654" => 6,
    "876543210" => 4,
    "234567890" => 2,
    "543210987" => 7,
    "987654321" => 9,
    "890123456" => 1
);

$resultat = crearHistorigrama($notes);

echo "Histograma:\n";
echo implode(', ', $resultat);    

?>



</body>

</html>