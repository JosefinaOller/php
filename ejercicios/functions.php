<?php

function imprimirNombre($name,$apellido=""){
    echo "Hola " . $name . " " . $apellido . "\n";
}

imprimirNombre("Josefina","Oller");
imprimirNombre("Chabi");

$nombre="Josefina Oller";
echo strtoupper($nombre);
?>