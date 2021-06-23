<?php
    $conexion = mysqli_connect('localhost','root','');
    if($conexion -> connect_error){
        die("Conexión falló: ". $conexion -> connect_error);
        
    }
    
    $sql = "CREATE DATABASE ayudantiaBD2";
    if($conexion -> query($sql) === true){
        echo "Base de datos creada exitosamente";
    }
    else{
        die("error en la creación: " .$conexion -> error);
    }


?>