<?php
class Calculadora 
{
    public $suma;
    public $resta;
    public $divisio;
    public $multiplicacio;
    public $potencial;
    public $factorial;

    function __construct($nom, $data_neix, $dni, $genere) 
    {
        $this->nom = $nom;
        $this->data_neix = $data_neix;
        $this->dni= $dni;
        $this->genere = $genere;
    }

    function saludar()
    {
        echo "{$this->nom} ( {$this->dni} - {$this->data_neix} - {$this->genere}): Hola!";
    }

    function calcular_edad()
    {
    
    }


?>