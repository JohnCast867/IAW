<?php

class Producte {
    public $nom;
    public $preu;
    public $stock;

    public function __construct($nom, $preu, $stock) {
        $this->nom = $nom;
        $this->preu = $preu;
        $this->stock = $stock;
    }

    public function afegirProducte($quantitat) {
        $this->stock += $quantitat;
        echo "S'ha afegit $quantitat unitats del producte '{$this->nom}'. Nou stock: {$this->stock}\n<br>";
    }

    public function comprarProducte($quantitat) {
        if ($this->stock >= $quantitat) {
            $this->stock -= $quantitat;
            echo "S'han comprat $quantitat unitats del producte '{$this->nom}'. Nou stock: {$this->stock}\n<br>";
        } else {
            echo "No hi ha prou estoc del producte '{$this->nom}'. Estoc actual: {$this->stock}\n<br>";
        }
    }

    public function canviarPreu($nouPreu) {
        $this->preu = $nouPreu;
        echo "S'ha canviat el preu del producte '{$this->nom}' a $nouPreu\n";
    }

    public function augmentarStock($quantitat) {
        $this->stock += $quantitat;
        echo "S'ha augmentat l'estoc del producte '{$this->nom}' en $quantitat unitats. Nou stock: {$this->stock}\n<br>";
    }
}

class Tenda {
    public $productes = [];

    public function afegirProducte($producte) {
        $this->productes[] = $producte;
        echo "S'ha afegit el producte '{$producte->nom}' a la tenda.\n<br>";
    }

    public function imprimirEstadisticaTenda() {
        echo "Estadística de la tenda:\n";
        foreach ($this->productes as $producte) {
            echo "Nom: {$producte->nom}, Preu: {$producte->preu}, Stock: {$producte->stock}\n";
        }
    }
}

$producte1 = new Producte("Producte1", 10.99, 50);
$producte2 = new Producte("Producte2", 24.99, 30);

$tenda = new Tenda();

$tenda->afegirProducte($producte1);
$tenda->afegirProducte($producte2);

$producte1->comprarProducte(20);
$producte2->canviarPreu(29.99);
$producte1->augmentarStock(10);

$tenda->imprimirEstadisticaTenda();


?>