<html>
    <?php
    #Generar de forma aleatòria una array unidimensional de nombres de 10 posicions. 
    for($i=0;$i<10;$i++){
        $array[$i]=rand(1,100);
        echo "</br>";
        echo $array[$i];
        }
        echo "</br>";

    #Cercar el nombre màxim i el nombre mínim d’aquesta array. 
        echo "El min es: " .min($array);
        echo "</br>";
        echo "El max es: " .max($array);
        echo "</br>";

    #Comptar quants d’elements té l’array.
        echo "Total de nombres al array: ".count($array) ;
        echo "</br>";
    
    #Sumar els elements d’una array. Calcular la mitjana dels elements d’una array.
        echo "Suma del array: " .array_sum($array) ;
        echo "</br>";

        echo "La mitjana es: " .array_sum($array)/count($array) ;
        echo "</br>";

    #Tornar un string amb els elements d’una array separats per comes (ús funció implode)
        echo "Array coma: " .implode(",", $array);
        echo "</br>";
    #Ordenar un array de nombres de forma ascendent i de forma descendent. Mostrar els resultats dins d’un string.
        sort($array);
        echo "Array ordenat: " .implode(",", $array);

        echo "</br>";

        rsort($array);
        echo "Array ordenat invers: " .implode(",", $array);
    
    #Mostrar la informació de l’array ordenada de l’exercici anterior dins d’una taula HTML.
        echo "<table border='1'>";
        for($i=0;$i<10;$i++){
           echo"<tr><td>".$array[$i]."</td></tr>";
            }
        echo"</table>";
        echo "</br>";

    #Cercar un element donat dins d’una array 
        $a = array(1,2,3,4,5,5,-6,0);
        echo "la cerca:" .array_search("5",$a); 
        echo "</br>";

    #Eliminar elements duplicats d’una array indexada.
        print_r(array_unique($a));
        echo "</br>";

    #Imprimir quants números positius, negatius i zeros hi ha en l’array. usa for
    $b = array(1,2,3,4,5,5,-6,0,0,0);
    $positivo=0;
    $negativo=0;
    $zero=0;
    foreach ($b as $value){
      if($value > 0){
          $positivo++;
          }elseif($value < 0){
         $negativo++;  
      }else{
       $zero++;
       }
    }
    echo "Positivos: ". $positivo;
    echo "</br>";
    echo "Negativos: ". $negativo;
    echo "</br>";
    echo "Zeros: ". $zero;
    echo "</br>";

    #Afegeix 2 elements al final de l’array.
        array_push($a,"7","8");
        echo implode(',',$a).'</br>';
    
    #Elimina aquests 2 anteriors elements.
        array_pop($a);
        array_pop($a);
        echo implode(',',$a).'</br>';

    // Practica amb array_diff, array_intersect, array_merge. Per a tal crea dues array, 
    // una amb el nom dels alumnes que fan IFC31A i l’altre amb els nom dels alumnes que fan IFC31B. 
    // Si un alumne en duu de primer ha d’aparèixer a les dues llistes.
    $IFC31A = ["Jordi","Miquel","Pep","Lluís","PIZZA"];
    $IFC31B = ["Joan","David","Francesc","Carles","PIZZA"];
    echo "<h3>Alumnes que fan IFC31A i no fan IFC31B</h3>";
    echo implode(", ",array_diff($IFC31A,$IFC31B))."<hr/>";
    echo "<h3>Alumnes que fan IFC31B i no fan IFC31A</h3>";
    echo implode(", ",array_diff($IFC31B,$IFC31A))."<hr/>";
    echo "<h3>Alumnes que fan IFC31A i IFC31B</h3>";
    echo implode(", ",array_intersect($IFC31A,$IFC31B))."<hr/>";
    echo "<h3>Alumnes que fan IFC31A o IFC31B</h3>";
    echo implode(", ",array_merge($IFC31A,$IFC31B))."<hr/>";
    ?>

</html>