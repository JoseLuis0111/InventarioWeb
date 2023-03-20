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
                        <li><a href="home.php">Inicio</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                      </ul>
                    </nav>
                
                    </div>
            </header>         

            <div id="contenido" class="contenido">

              <br><br><br><br>
              <h1>Factura</h1>
              <br><br>

              <div class="div-historial">

                <div class="Div-datos-historial">
                  <span>Fecha</span>
                  <span>Hora</span>
                  <span>Empleado</span>
                </div>
<!----------------------------------------------------------------->
                  <div class="Div-ventas-historial">
                    <span>06-11-2021</span>
                    <span>04:23 AM</span>
                    <span>Willy Wonka</span>
                  </div><br>

                  <p>Productos:</p><br>
                  <p>Total: $</p>
<!----------------------------------------------------------------->
              </div>
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>