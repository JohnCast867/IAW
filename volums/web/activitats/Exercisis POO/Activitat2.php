<?php
class Calculadora 
{
    function suma($a, $b) 
    { return $a + $b; }

    function resta($a, $b)
    { return $a - $b; }
    
    function divisio($a, $b)
    {return $a / $b;}

    function multiplicacio($a, $b)
    {return $a * $b;}

    function potencia($a, $b)
    {return pow($a,$b);}

    function factorial($a)
    {$fact=1; for($i = 1 ; $i <= $a ; $i++ ){ $fact=$fact*$i; } return $fact;}
    
            
            
}

$calculator = new Calculadora;
echo "Calcul: ". $calculator->factorial(4);

?>