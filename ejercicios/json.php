<?php

$jsonContenido='[
    {"nombre":"Josefina", "apellido":"Oller"},
    {"nombre":"Coqui", "apellido":"Calzetta"}
]';

$resultado= json_decode($jsonContenido);
print_r($resultado);

foreach($resultado as $persona){
    echo $persona->nombre ." ".  $persona->apellido . "\n";
}

$personas=array("Oscar"=>40,"Jose"=>20, "Marisa"=>38);

echo json_encode($personas);
?>