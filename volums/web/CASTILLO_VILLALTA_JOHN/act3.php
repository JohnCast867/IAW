<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 3</h1>

<?php

function crearHistorigrama($notes) {
    #array_fill index 0 elements 11(0 i 10) i valor 0
    $historigrama = array_fill(0, 11, 0);

    foreach ($notes as $nota) {
        $historigrama[$nota]++;
    }

    return $historigrama;
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

echo "Historigrama:\n";
echo implode(', ', $resultat);    

?>



</body>

</html>