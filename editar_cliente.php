<?php 
    include 'conexionBD.php';
    if(isset($_GET['id'])){
        $rut = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE rut_cliente = $rut ";
        $resultado = mysqli_query($conexion,$sql);
        if(mysqli_num_rows($resultado)){
            $fila = mysqli_fetch_array($resultado);
            $nombre = $fila['nombre_cliente'];
            $direccion = $fila['direccion'];
        }
    }


    if(isset($_POST['Actualizar'])){
        $rut = $_GET['id'];
        $nombre = $_POST['nombre_cliente'];
        $direccion = $_POST['direccion'];
        
        $sql = " UPDATE cliente SET nombre_cliente = '$nombre', direccion = '$direccion'  WHERE rut_cliente = $rut";
        mysqli_query($conexion, $sql);

        header("Location: formulariocliente.php");

    }
?>

<?php include("includes/cabecera.php"); ?>

<div class="container p-4">

    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">
                <form action="editar_cliente.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    
                    <center>
                        <h3>Actualizar cliente</h3>
                        <label >Nombre: </label>
                        <div class="form-group">
                            <input type="text" name="nombre_cliente" placeholder="Actualizar el nombre del cliente" value="<?php echo $nombre?>"><br>
                        </div>                        
                        <label >Dirección: </label>
                        <div class="form-group">
                            <input type="text" name="direccion" placeholder="Actualizar la direccion del cliente" value="<?php echo $direccion?>"><br>
                        </div>
                            
                        <input type="submit" class="btn btn-success btn-block" name="Actualizar" placeholder="Actualizar">
                    </center>
                    
                </form>
            </div>    
        </div>
    </div>

</div>

