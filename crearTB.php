<?php
    include 'conexionBD.php';
    $sql = "CREATE TABLE articulo (
        cod_art INT(2) PRIMARY KEY,
        nombre_articulo VARCHAR(100),
        precio INT(8)
    )" ;

    $sql1 =  "CREATE TABLE cliente (
        rut_cliente INT(8) PRIMARY KEY,
        nombre_cliente VARCHAR(100),
        direccion VARCHAR(200)
    )" ;

    $sql2 =  "CREATE TABLE compra (
        cod_rt INT(2) ,
        rut_cliente VARCHAR(100)
    )" ;
    if($conexion -> query($sql) === true){
        if($conexion -> query($sql1) === true){
            if($conexion -> query($sql2) === true){
                echo "Tablas creadas correctamente.";
            }
        }
    }
    else{
        die("Error al crear tablas:".$conexion -> error);
    }
?>