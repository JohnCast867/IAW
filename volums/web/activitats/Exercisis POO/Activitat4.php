<?php

class Escola {
    private $nom;
    private $adreca;
    private $anyInauguracio;
    private $cursEscolar;
    private $alumnes = [];
    private $assignatures = [];

    public function __construct($nom, $adreca, $anyInauguracio, $cursEscolar) {
        $this->nom = $nom;
        $this->adreca = $adreca;
        $this->anyInauguracio = $anyInauguracio;
        $this->cursEscolar = $cursEscolar;
    }

    public function afegirAlumne($nom, $edat, $curs) {
        $alumneId = count($this->alumnes) + 1;
        $alumne = new Alumne($alumneId, $nom, $edat, $curs);
        $this->alumnes[$alumneId] = $alumne;
    }

    public function afegirAssignatura($nom, $horesLectives) {
        $assignatura = new Assignatura($nom, $horesLectives);
        $this->assignatures[$nom] = $assignatura;
    }

    public function matricularAlumne($alumneId, $assignaturaNom) {
        if (isset($this->alumnes[$alumneId]) && isset($this->assignatures[$assignaturaNom])) {
            $this->alumnes[$alumneId]->matricular($this->assignatures[$assignaturaNom]);
        }
    }

    public function mostrarDadesAlumne($alumneId) {
        if (isset($this->alumnes[$alumneId])) {
            $this->alumnes[$alumneId]->mostrarDades();
        }
    }

    public function mostrarDadesAssignatura($assignaturaNom) {
        if (isset($this->assignatures[$assignaturaNom])) {
            $this->assignatures[$assignaturaNom]->mostrarDades();
        }
    }

    public function mostrarDadesCompletes() {
        echo "Dades de l'escola:\n";
        echo "Nom: {$this->nom}\nAdreça: {$this->adreca}\nAny d'inauguració: {$this->anyInauguracio}\nCurs escolar: {$this->cursEscolar}\n\n";

        echo "Assignatures:\n";
        foreach ($this->assignatures as $assignatura) {
            $assignatura->mostrarDades();
            echo "\n";
            echo "Alumnes matriculats:\n";
            foreach ($this->alumnes as $alumne) {
                if ($alumne->estaMatriculat($assignatura)) {
                    $alumne->mostrarDades();
                    echo "\n";
                }
            }
            echo "\n";
        }

        echo "Alumnes sense cap assignatura matriculada:\n";
        foreach ($this->alumnes as $alumne) {
            if (!$alumne->teAssignatures()) {
                $alumne->mostrarDades();
                echo "\n";
            }
        }
    }
}

class Alumne {
    private $id;
    private $nom;
    private $edat;
    private $curs;
    private $assignaturesMatriculades = [];

    public function __construct($id, $nom, $edat, $curs) {
        $this->id = $id;
        $this->nom = $nom;
        $this->edat = $edat;
        $this->curs = $curs;
    }

    public function matricular($assignatura) {
        $this->assignaturesMatriculades[] = $assignatura;
    }

    public function mostrarDades() {
        echo "ID: {$this->id}\nNom: {$this->nom}\nEdat: {$this->edat}\nCurs: {$this->curs}\n";
    }

    public function estaMatriculat($assignatura) {
        return in_array($assignatura, $this->assignaturesMatriculades);
    }

    public function teAssignatures() {
        return !empty($this->assignaturesMatriculades);
    }
}

class Assignatura {
    private $nom;
    private $horesLectives;

    public function __construct($nom, $horesLectives) {
        $this->nom = $nom;
        $this->horesLectives = $horesLectives;
    }

    public function mostrarDades() {
        echo "Nom de l'assignatura: {$this->nom}\nHores lectives setmanals: {$this->horesLectives}\n";
    }
}

// Exemple d'ús
$escola = new Escola("Escola Exemple", "Carrer Exemple, 123", 2000, "2024-2025");

$escola->afegirAlumne("Joan", 15, "3r ESO");
$escola->afegirAlumne("Maria", 16, "4t ESO");

$escola->afegirAssignatura("Matemàtiques", 4);
$escola->afegirAssignatura("Història", 3);

$escola->matricularAlumne(1, "Matemàtiques");
$escola->matricularAlumne(1, "Història");
$escola->matricularAlumne(2, "Matemàtiques");

$escola->mostrarDadesCompletes();
