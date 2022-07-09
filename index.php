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
    
        <!-- aqui debe ir la barra de navegación--> 
        <?php
            include("encabezado.php");
        ?>



        <section class="container m-5 bg-light">

            <!--buscador-->
            <form class="">
                <div class="row">
                    <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="Introducir el nombre del platillo">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-success">Buscar</button>
                    </div>
                </div>
            </form>

            <!-- tabla con precio-->
            <div class="row p-5" >
                <div class="col-lg-8">
                    <table class="table">
                        <tr>
                            <td>Código</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                            <td>Opciones</td>
                        </tr>

                        <tr>
                            <td>27384</td>
                            <td>Tacos Dorados</td>
                            <td>$20.5</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>27384</td>
                            <td>Tacos Dorados</td>
                            <td>$20.5</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td>27384</td>
                            <td>Tacos Dorados</td>
                            <td>$20.5</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>


                    </table>
                </div>
                <div class="col-lg-4 align-self-end">
                    <h3 class="text-center">Tu pedido es por: $545.65</h3>
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