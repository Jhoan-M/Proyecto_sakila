<?php

require_once "conexion.php";
$nombre = $_GET['nombre'] ?? "";
$pagina = "Language";


        function obtenerLanguage($conexion){
                $query = "SELECT * FROM language"; 
        $resultado = mysqli_query($conexion, $query);
                return $resultado;
            }
        
            function obtenerLanguagePorNombre($conexion, $nombre){
                $query = "SELECT * FROM language WHERE name LIKE '%$nombre%'";
        
                $resultado = mysqli_query($conexion, $query);
                return $resultado;
            }
        