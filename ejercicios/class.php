<?php

class persona{

    public $nombre;
    private $edad;
    protected $altura;

    public function __construct($nombre,$edad,$altura){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->altura=$altura;
    }
    

    public function imprimirNombre(){
        echo "\nHola soy ".$this->nombre;
    }

    public function imprimirEdad(){
        echo "\nMi edad es ".$this->edad;
    }

    public function imprimirAltura(){
        echo "\nMi altura es ".$this->altura;
    }
}

$objAlumno= new persona("Josefina",27,1.67);
$objAlumno->imprimirNombre();
//echo $objAlumno->edad; arroja error por ser private, lo mismo con altura.
$objAlumno->imprimirEdad();
$objAlumno->imprimirAltura();
?>