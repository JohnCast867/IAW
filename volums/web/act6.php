<html>
    <?php
    $numEnt = 10;
    if($numEnt < 5){
        $Preu1 = 5 * $numEnt;
        echo "El preu total es de: $Preu1 ";
        }elseif ($numEnt >= 5 && $numEnt <= 9) {
            $Preu2 = 4 * $numEnt;
            echo "El preu total es de: $Preu2 ";
            }else{
                $Preu3 = 3 * $numEnt;
                echo "El preu total es de: $Preu3";
                };
        ?>
</html>

