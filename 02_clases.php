<?php

class vehiculo{
    public $numero_de_llantas;
    private $kilometraje;

    public function __construct(){
        $this->inicializaKilometraje();
    }

    public function getKilometraje(){
        return $this->kilometraje;
    }

    private function inicializaKilometraje(){
        $this->kilometraje = 0;
    }

    protected function setKilometraje($km){

    }
}

$auto = new vehiculo();
$auto->numero_de_llantas = 4;
echo 'Numero de llantas: ' .$auto->numero_de_llantas;
echo '<br/>';
echo 'El kilometraje es: ' .$auto->getKilometraje(). ' y soy feliz'

class Auto extends vehiculo{
    public $marca = 'N/A'
    public $anio = 'N/A'
    public $color = 'N/A'

    funst
}

?>