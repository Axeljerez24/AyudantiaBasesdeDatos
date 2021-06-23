<?php include('includes/cabecera.php'); ?>
    
    <div class="container p-4" >
            
            <div class="row">
                <?php if(isset($_SESSION['message'])){?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <div class="card card-body col-md-4">
                    <center>
                        <form method="POST" action="registrararticulo.php">
                            <h1>Formulario Articulo</h1>
                            <label >Codigo: </label>
                            <div class="form-group">
                                <input type="number" name="cod_art" placeholder="Ingrese el codigo del articulo"><br>
                            </div>                            
                            <label >Nombre: </label>
                            <div class="form-group">
                                <input type="text" name="nombre_articulo" placeholder="Ingrese el nombre del articulo"><br>
                            </div>                            
                            <label >Precio: </label>
                            <div class="form-group">
                                <input type="number" name="precio" placeholder="Ingrese precio"><br>
                            </div>                            
                            <input type="submit" class="btn btn-success btn-block" name="Enviar" placeholder="Enviar">
                        </form>                    
                    </center>              
                  
                </div>
            </div>
        
    </div>   

    <div class="container p-4" >
            
            <div class="row">
                <div class="card card-body">
                    
                    <center>

                    </center>
                    
                    
                </div>
            </div>
        
    </div>  
    
    
    
   
    
<?php include('includes/footer.php'); ?>