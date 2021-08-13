<?php

require_once "models/modelo_actor.php";

$resultado = obtenerActores($conexion);
$resultado = obtenerActoresPorNombre($conexion, $nombre);


if(isset($_GET['buscar']))
{
    $nombre =$_GET['nombre'] ?? "";
    $resultado = obtenerActoresPorNombre($conexion, $nombre);
}


require_once 'vistas/actores.html.php';

