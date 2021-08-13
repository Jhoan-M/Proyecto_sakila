<?php

require_once 'models/modelo_language.php';

$resultado = obtenerLanguage($conexion);
$resultado = obtenerLanguagePorNombre($conexion, $nombre);

if(isset($_GET['buscar']))
{
    $nombre =$_GET['nombre'] ?? "";
    $resultado = obtenerLanguagePorNombre($conexion, $nombre);
}

require_once 'vistas/language_vistas.php';