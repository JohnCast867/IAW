<html>
<?php
$fecha = date("m");
echo "el numero del mes es el " .$fecha;
echo "<br>";

$fecha2 = date("F");
echo "el mes: " .$fecha2;
echo "<br>";

$fecha3 = date("Y");
echo "Año: " .$fecha3;
echo "<br>";

$fecha4 = date("l");
echo $fecha4;
echo "<br>";

$fecha5 = date("d-m-Y");
echo $fecha5;
echo "<br>";

$fecha6 = date("m-d-Y");
echo $fecha6;
echo "<br>";

$fecha7 = date("Y-m-d");
echo $fecha7;
echo "<br>";

$fecha8 = date("H:i:s");
echo $fecha8;
echo "<br>";

$fecha9 = date("h:i:s A");
echo $fecha9;
echo "<br>";


function traduirDataHoraCatala() {
    $diesSetmana = [
        'Monday'    => 'Dilluns',
        'Tuesday'   => 'Dimarts',
        'Wednesday' => 'Dimecres',
        'Thursday'  => 'Dijous',
        'Friday'    => 'Divendres',
        'Saturday'  => 'Dissabte',
        'Sunday'    => 'Diumenge',
    ];

    $mesos = [
        'January'   => 'de gener',
        'February'  => 'de febrer',
        'March'     => 'de març',
        'April'     => 'd\'abril',
        'May'       => 'de maig',
        'June'      => 'de juny',
        'July'      => 'de juliol',
        'August'    => 'd\'agost',
        'September' => 'de setembre',
        'October'   => 'd\'octubre',
        'November'  => 'de novembre',
        'December'  => 'de desembre',
    ];

    $dataHoraActual = new DateTime();
    $diaSetmana = $diesSetmana[$dataHoraActual->format('l')];
    $dia = $dataHoraActual->format('j');
    $mes = $mesos[$dataHoraActual->format('F')];
    $any = $dataHoraActual->format('Y');
    $hores = $dataHoraActual->format('H');
    $minuts = $dataHoraActual->format('i');
    $segons = $dataHoraActual->format('s');

    $Traduccio = "$diaSetmana, $dia $mes del $any a les $hores hores $minuts minuts i $segons segons";

    return $Traduccio;
}

echo traduirDataHoraCatala();



?>



</html>