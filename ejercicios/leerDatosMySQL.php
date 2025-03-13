<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";

try {
    
    $conexion= new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql); //prepara la consulta SQL
    $sentencia->execute(); //Ejecuta la consulta

    $resultado=$sentencia->fetchAll(); //Obtiene TODOS los resultados

    print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto['nombre']."\n");
    }

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión errónea" . $error;
}
?>