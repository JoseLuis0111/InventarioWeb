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
    </head>

    <body>
            <header>
                    <div class="logo"><a href="index.php"><img src="img/Logo.png" width="40px" height="40px"></a></div>
                    <div class="header"> 
                        <nav class="Titulo">
                            <ul>Inventario tienda</ul>
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

              <br>

              <div class = "signup-div">

                <p class = "subtit">Nuevo usuario</p>

                <form class="signup-form" action="register2.php" method="post">

                    <label for="FirstName">Nombre:</label><br>
                    <input class="form-objts" type="text" name="FirstName" placeholder="Ingrese su nombre" autofocus required>
                    <label for="LastName">Apellido Paterno:</label><br>
                    <input class="form-objts" type="text" name="LastName" placeholder="Ingrese su apellido paterno" required>
                    <label for="LastName2">Apellido Materno:</label><br>
                    <input class="form-objts" type="text" name="LastName2" placeholder="Ingrese su apellido materno">
                    <label for="Email">Correo electrónico:</label><br>
                    <input class="form-objts" type="email" name="Email" placeholder="Ingrese su correo electrónico" required>
                    <label for="Passwd">Contraseña:</label><br>
                    <input class="form-objts" type="password" name="Passwd" placeholder="Contraseña" required>
                    <label for="Passwd">Confirmar contraseña:</label><br>
                    <input class="form-objts" type="password" name="ConfirmPasswd" placeholder="Confirme su contraseña" required> <br><br>
                    <input class="in_btn form-objts" type="submit" name="submit" value="Registrar usuario">

                </form>


              </div>    
              
                <br><br>
                <br><br><br><br> 
                    
            </div>
            
            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>