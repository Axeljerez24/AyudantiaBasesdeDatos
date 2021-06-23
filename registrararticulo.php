<?php
    include 'conexionBD.php';
    if(isset($_POST['Enviar'])){
        if(strlen($_POST['cod_art']) >= 1 &&
            strlen($_POST['nombre_articulo']) >= 1 &&
            strlen($_POST['precio']) >= 1){
                $cod_art = ($_POST['cod_art']);
                $nombre_articulo = ($_POST['nombre_articulo']);
                $precio = ($_POST['precio']);
                $sql = "INSERT INTO articulo VALUES ('$cod_art','$nombre_articulo','$precio')";
                $resultado = mysqli_query($conexion,$sql);
                if($resultado){
                    $_SESSION['message'] = 'Articulo agregado correctamente';
                    $_SESSION['message_type'] = 'success';

                    header("Location: formularioarticulo.php");
                }
                else{
                    ?>
                    <h3>Ha ocurrido un error</h3>
                    <?php
                }
            }
    }
?>