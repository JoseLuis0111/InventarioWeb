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
              <h1>Empleados</h1>
              <br><br>

              <div class="div-empleados">

                <div class="list-empleados">

                  <?php

                    require('link_db.php');

                    $request = "SELECT `idEmpleado`, `Nombre`, `ApellidoPat`, `ApellidoMat` FROM `Empleado`";
                    $result = mysqli_query($link,$request);
                    mysqli_close($link);
                    $filas = mysqli_num_rows($result);


                    if($filas > 0){
                      while($datos = mysqli_fetch_array($result)){
                  ?>
                        <a href="datosEmpleado.php?id=<?php echo $datos["idEmpleado"]; ?>" class="usuario-btn"> <div class="usuario"> <?php echo $datos["Nombre"] ." ". $datos["ApellidoPat"] ." ". $datos["ApellidoMat"] ?> </div> </a> 
                  <?php
                      }
                    }

                  ?>

                </div>

                <div class="add-empleado">
                  <form action="signup2.php">
                    <input type="submit" value="+" class="add-empleado-btn">
                  </form>
                </div>

              </div>
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>