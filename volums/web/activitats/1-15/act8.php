<html>
<?php
    $num=99;
    if($num<50){
        for ($i = 1; $i <= $num ; $i++) {
            if ($num==$i){
                echo "El numero es $i";
            }
            }
        }elseif($num>50 && $num<100){
            for ($i = 1; $i <= $num ; $i++) {
                if ($num==$i){
                    echo "El numero es $i";
                }
                }
        }else {
            echo "el numero no esta entre 1-100";
        }
?>
</html>