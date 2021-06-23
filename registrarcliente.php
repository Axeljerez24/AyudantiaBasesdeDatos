<?php
    include 'conexionBD.php';
    if(isset($_POST['Enviar'])){
        if(strlen($_POST['rut_cliente']) >= 1 &&
            strlen($_POST['nombre_cliente']) >= 1 &&
            strlen($_POST['direccion']) >= 1){
                $rut_cliente = ($_POST['rut_cliente']);
                $nombre_cliente = ($_POST['nombre_cliente']);
                $direccion = ($_POST['direccion']);
                $sql = "INSERT INTO cliente VALUES ('$rut_cliente','$nombre_cliente','$direccion')";
                $resultado = mysqli_query($conexion,$sql);
                if(!$resultado){
                    ?>
                    <h3>Ha ocurrido un error</h3>
                    <?php
                    
                }
                                
            }
        $_SESSION['message'] = 'Cliente agregado correctamente';
        $_SESSION['message_type'] = 'success';

        header("Location: formulariocliente.php");    
    }
?>