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
                    <h3 class="text-center text-muted">Listado Platillos</h3>
                    <!--tabla con los platillos disponibles-->
                    <table class="table">
                        <tr>
                            <td>Código</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                            <td>Observaciones</td>
                            <td>Opciones</td>
                        </tr>

                        <tr>
                            <td>387634</td>
                            <td>Chilaquiles</td>
                            <td>32</td>
                            <td>Verdes con picante</td>
                            <td><a class="btn btn-danger" href="">Eliminar</a> | <a class="btn btn-success" href="">Modificar</a>   </td>
                        </tr>

                        <tr>
                            <td>387634</td>
                            <td>Mole</td>
                            <td>60</td>
                            <td>De puebla</td>
                            <td><a class="btn btn-danger" href="">Eliminar</a> | <a class="btn btn-success" href="">Modificar</a>   </td>
                        </tr>

                        <tr>
                            <td>3876234</td>
                            <td>Tacos Dorados</td>
                            <td>18.5</td>
                            <td>Pollo con papas</td>
                            <td><a class="btn btn-danger" href="">Eliminar</a> | <a class="btn btn-success" href="">Modificar</a>   </td>
                        </tr>

                    </table>
                  
                </div>
                <div class="col-lg-4">
                    <img src="img/comida.jpg" width="400px">
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