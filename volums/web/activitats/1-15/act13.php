<html>
    <?php
    for ($i=1; $i<=10 ;$i++){
        echo "<table border='black'>";
        echo "tabla del: $i";
        for($j = 1; $j <= 11; $j++) {
            echo "<tr><td>". $i ."x". $j. "=". $i * $j."</td></tr>";
            }
            echo "</table><br/>";
            }
            ?>
</html>