<?php 
    include 'conexionBD.php';
    if(isset($_GET['id'])){
        $rut = $_GET['id'];
        $sql = "DELETE FROM cliente WHERE rut_cliente = $rut";
        $resultado = mysqli_query($conexion, $sql);
        if(!$resultado){
            die('Consulta fallida');
        }
        $_SESSION['message'] = 'Cliente eliminado satisfactoriamente';
        $_SESSION['message_type'] = 'danger';

        header("Location: formulariocliente.php");
        
    }
?>