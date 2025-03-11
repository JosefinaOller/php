<?php

class Persona{

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

$objAlumno= new Persona("Josefina",27,1.67);
$objAlumno->imprimirNombre();
//echo $objAlumno->edad; arroja error por ser private, lo mismo con altura.
$objAlumno->imprimirEdad();
$objAlumno->imprimirAltura();

class Trabajador extends Persona{
    public $puesto;

    public function __construct($nombre,$edad,$altura,$puesto)
    {
        parent::__construct($nombre,$edad,$altura);
        $this->puesto=$puesto;
    }

    public function imprimirTrabajador(){
        echo "\nHola soy ". $this->nombre . "\nMi altura es " . $this->altura . "\nMi puesto es " . $this->puesto;
    }

    /*public function mostrarEdad(){
        return $this->edad; //genera error pues es privado, solo puede ver la super clase
    }*/
}

$objTrabajador= new Trabajador("Chabi",27,1.89,"Programadora");
$objTrabajador->imprimirTrabajador();
?>