<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 15 - PHP bàsic.</h1>
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
        
        $N = 100;
        echo "<ol>";
        for ($numero = 1; $numero <= $N; $numero++) {
            if (esPrimo($numero)) { 
                echo "<li> $numero es primer.</li>";
            }
        }
        echo "</ol>";
        ?>

    </ul>
</body>

</html>