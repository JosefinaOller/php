<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";

try {
    
    $conexion= new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql ="INSERT INTO `fotos`(`id`, `nombre`, `ruta`) VALUES (NULL,'Jugando con la programación','foto.jpg')";
    
    $conexion->exec($sql); //es para ejecutar instrucciones SQL
    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión errónea" . $error;
}
?>