<html>
    <?php
    $var1=1;
    $var2=99;

    echo "<ol>";
    for($i=$var1;$i<=$var2;$i++){
        if ($i % 3 == 0){
            echo"<li>".$i."</li>";
            }
            }
    echo "</ol>"
    ?>
</html>