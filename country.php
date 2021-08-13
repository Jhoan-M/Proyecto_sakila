<?php

require_once 'models/modelo_country.php';


$resultado = obtenerPais($conexion);
$resultado = obtenerPaisPorNombre($conexion, $nombre);



if(isset($_GET['buscar']))
{
    $nombre =$_GET['nombre'] ?? "";
    $resultado = obtenerPaisPorNombre($conexion, $nombre);
}


require_once 'vistas/country_vistas.php';

