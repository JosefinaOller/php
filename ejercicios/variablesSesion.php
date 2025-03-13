<?php
session_start();

$_SESSION["usuario"]="chabi";
$_SESSION["estatus"]="logueado";

echo "Sesión iniciada\n";

echo "Usuario: ".$_SESSION["usuario"]. " estatus: ". $_SESSION["estatus"];
?>