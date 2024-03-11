<?php
include_once "bd.php";
class Pelicula
{
    private $titol;
    private $dataEstreno;
    private $pressupost;
    private $pais;

    function __construct($titol, $dataEstreno, $pressupost, $pais)
    {
        $this->titol = $titol;
        $this->dataEstreno = $dataEstreno;
        $this->pressupost = $pressupost;
        $this->pais = $pais;
    }
    public function getTitulo()
    {
        return $this->titol;
    }
    public function getDataEstreno()
    {
        return $this->dataEstreno;
    }
    public function getPressupost()
    {
        return $this->pressupost;
    }
    public function getPais()
    {
        return $this->pais;
    }
}