<?php
require_once "conexion.php";

$nombre = $_GET['nombre'] ?? "";
$pagina = "Country";


        function obtenerPais($conexion){
                $query = "SELECT * FROM country"; 
        $resultado = mysqli_query($conexion, $query);
                return $resultado;
            }
        
            function obtenerPaisPorNombre($conexion, $nombre){
                $query = "SELECT * FROM country WHERE country LIKE '%$nombre%'"; 
        $resultado = mysqli_query($conexion, $query);
                return $resultado;
            }