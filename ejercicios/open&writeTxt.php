<?php

$archivo="contenido.txt";

echo fread(fopen($archivo,"r"),filesize($archivo));

$archivoACrear=fopen("archivo.txt","w");
fwrite($archivoACrear,"Hola,saludos");
fclose($archivoACrear);

echo fread(fopen("archivo.txt","r"),filesize("archivo.txt"));

?>