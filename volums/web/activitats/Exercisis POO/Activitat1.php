<?php
class Persona 
{
    public $nom;
    public $data_neix;
    public $dni;
    public $genere;

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
        $date1 = new DateTime(date("Y-m-d"));
        $date2 = new DateTime($this->data_neix);
        return $interval = date_diff($date1, $date2)->format('%y');
                
    }

}
$personal = new Persona("Miquel","24-01-2003","4320190P","Helicoptero");
$personal->saludar();
echo "<br>Edat: ". $personal->calcular_edad()." anys";
echo "<br>";

?>