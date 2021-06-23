<?php include('includes/cabecera.php'); ?>

    <div class="container p-4" >
        
        <div class="row">
            <?php if(isset($_SESSION['message'])){?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php } ?>  
            <div class="col-md-4">
            <div class="card card-body">
                <center>
                    <form method="POST" action="registrarcliente.php">
                        <h1>Formulario Cliente</h1>
                        <label >Rut: </label>
                        <div class="form-group">
                            <input type="number" name="rut_cliente" placeholder="Ingrese el rut del cliente"><br>
                        </div>                        
                        <label >Nombre: </label>
                        <div class="form-group">
                            <input type="text" name="nombre_cliente" placeholder="Ingrese el nombre del cliente"><br>
                        </div>                        
                        <label >Dirección: </label>
                        <div class="form-group">
                            <input type="text" name="direccion" placeholder="Ingrese la direccion del cliente"><br>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block" name="Enviar" placeholder="Enviar">
                    </form>
                </center>
            </div>
            </div>
            
        </div>
    
    </div>

    <div class="col-md-8" >
        <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Rut cliente</th>
                    <th>Nombre cliente</th>
                    <th>Dirección Cliente</th>
                    <th>Acciones</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php 
                        include 'conexionBD.php';
                        $sql = "SELECT * FROM cliente";
                        $resultado = mysqli_query($conexion, $sql);

                        while($fila = mysqli_fetch_array($resultado)){?>
                            <tr>
                                <td><?php echo $fila['rut_cliente'] ?></td>
                                <td><?php echo $fila['nombre_cliente'] ?></td>
                                <td><?php echo $fila['direccion'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="editar_cliente.php?id=<?php echo $fila["rut_cliente"]?>">
                                        <i class="fas fa-marker"></i>
                                    </a>

                                    <a class="btn btn-danger" href="eliminar_cliente.php?id=<?php echo $fila["rut_cliente"]?>">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            
                    <?php }?>                    
                </tbody>
        </table>
    </div>




    

    <?php include('includes/footer.php') ?>