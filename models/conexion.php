<?php


$host = "127.0.0.1";
$usuario = "root";
$contraseña = "";
$base_datos = "sakila";

$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

if (!$conexion){
        echo "Hubo un error al conectarnos";
        
    }
    $url = "http://".$_SERVER["HTTP_HOST"]. "/sakilapp"; 