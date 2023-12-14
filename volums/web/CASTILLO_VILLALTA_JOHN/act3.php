<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 2</h1>

    <?php

function generarHistograma($notes) {
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

$resultat = generarHistograma($notes);

echo "Histograma de les notes:\n";
print_r($resultat);

?>



</body>

</html>