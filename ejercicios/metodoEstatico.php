<?php

class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un método estático";
    }
}

$obj=new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo(); //es lo mismo que arriba, pero aca no hace falta instanciar digamos. SIEMPRE que sea estatico. 
?>