<?php
              session_start();

              if(!isset($_SESSION['email'])){
                header('Location:index.php');
              }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inventario</title>
        <link rel="shortcut icon" href="img/Logo.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/Estilos.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>

    <body>
            <header>
                    <div class="logo"><a href="index.php"><img src="img/Logo.png" width="40px" height="40px"></a></div>
                    <div class="header"> 
                        <nav class="Titulo">
                            <ul>Inventario tienda</ul>
                        </nav>

                        <nav class="menu-btn">
                          <label id="icono-menu" class="fas fa-bars"></label>
                        </nav>

                    <nav>
                      <ul id="menu" class="menu ocultar-menu">
                        <li><a href="logout.php">Cerrar sesión</a></li>
                      </ul>
                    </nav>
                
                    </div>
            </header>         

            <div id="contenido" class="contenido">

                    <br><br><br><br><br>

                      <section class="wrapper">

                            <div class="inner">
                                <div class="highlights">

                                    <section>
                                      <div class="content">
                                        <a class="MenuBtns" href="venta.php">
                                          <header>
                                            <i class="icon fas fa-hand-holding-usd"></i><br><br>
                                            <h3>Venta</h3>
                                          </header>
                                        </a>
                                      </div>
                                    </section>

                                    <section>
                                      <div class="content">
                                        <a class="MenuBtns" href="inventario.php">
                                          <header>
                                            <i class="icon fas fa-warehouse"></i><br><br>
                                            <h3>Inventario</h3>
                                          </header>
                                        </a>
                                      </div>
                                    </section>
                                    
                                    <section>
                                      <div class="content">
                                        <a class="MenuBtns" href="historial.php">
                                          <header>
                                            <i class="icon far fa-clipboard"></i><br><br>
                                            <h3>Historial de ventas</h3>
                                          </header>
                                        </a>
                                      </div>
                                    </section>

                                    <section>
                                      <div class="content">
                                        <a class="MenuBtns" href="empleados.php">
                                          <header>
                                            <i class="icon fas fa-users"></i><br><br>
                                            <h3>Empleados</h3>
                                          </header>
                                        </a>
                                      </div>
                                    </section>
                                
                                </div>
                            </div>

                      </section>
                    
                    <br><br>
                    <br><br><br><br> 
                    
                    </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>