<!DOCTYPE html>
<html>
    <head>
        <title>
            Restaurante "El buen Sabor"
          
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
       
        <!--aqui debe ir la barra de navegación -->
        <?php
             include("encabezado.php");
        ?>

        <section class="container m-5 bg-light">

           <!--registro de platillos-->
           <div class="row">
                
                <div class="col-lg-8">
                    <h3 class="text-center text-muted">Registro de Platillos</h3>
                    <!--formulario de registro-->
                    <form>
                       <div class="row mb-3">
                            <label class="col-sm-2">Código</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Introduce el código del platillo">
                            </div>
                       </div>
                       
                       <div class="row mb-3">
                            <label class="col-sm-2">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nombre del platillo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Precio</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Precio del platillo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Observaciones</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Comentarios">
                            </div>
                        </div>

                        <button class="btn btn-success">Registrar</button>
                       
                    </form>
                </div>
                <div class="col-lg-4">
                    <img src="img/platillo_alta.jpg" width="400px">
                </div>
                
            </div>




        </section>
        <footer class="text-muted p-5 bg-light">
            <div class="container">
           
              <p class="text-center">Derechos reservados 2022</p>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>