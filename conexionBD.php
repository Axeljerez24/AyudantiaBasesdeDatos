<?php
    $conexion = mysqli_connect('localhost','root','','ayudantiaBD2');
    if($conexion -> connect_error){
        die("Error al conectar con la base de datos: " .$conexion -> connect_error);
    }
?>