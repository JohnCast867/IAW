<?php
class Tenda
{
    public $nom;
    public $preu;
    public $stock;
    
    function afegirProducte($n, $p, $s) {
        if ($this->comprovarNombre($n)) {
            $this->nom = $n;
            $this->preu = $p;
            $this->stock = $this->comprovarStock($s);
            } else {
                echo "Error: Nombre incorrecte.";
                };
                }

    function comprar($quantitat){
        if ($this->comprovarQuantitat($quantitat)){
            return $this->vendreProductes($quantitat);
            }else{
                echo "No hi ha suficient stock per a aquesta quantitat.";
                }
                }
    
    
}

$Tienda = new Tenda;
echo "Calcul: ". $calculator->factorial(4);

?>