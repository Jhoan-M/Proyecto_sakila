<?php

require_once "models/modelo_category.php";

$resultado = obtenerCategoria($conexion);
$resultado = obtenerCategoriaPorNombre($conexion, $nombre);

if(isset($_GET['buscar']))
{
    $nombre =$_GET['nombre'] ?? "";
    $resultado = obtenerCategoriaPorNombre($conexion, $nombre);
}

require_once 'vistas/category_vistas.php';