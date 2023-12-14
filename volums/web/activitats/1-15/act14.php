<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 14 - PHP bàsic.</h1>
    <ul>
        <?php
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            
            for ($i = 2; $i * $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            
            return true;
        }
        
        $numero = 8;
        
        if (esPrimo($numero)) {
            echo "$numero es primer.";
        } else {
            echo "$numero no es primer.";
        }
        
        ?>

    </ul>
</body>

</html>