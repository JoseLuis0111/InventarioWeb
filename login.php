<?php
              session_start();

              if(isset($_SESSION['email'])){
                header('Location:home.php');
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
                
                    </div>
            </header>

            <div id="contenido" class="contenido">

              <br><br><br><br><br>

              <div class = "login-div">

                <p class = "subtit">Iniciar sesión</p>

                <form class="login-form" action="validUser.php" method="post">

                  <input class="form-objts" type="text" name="email" placeholder="Correo electrónico" autofocus required>
                  <input class="form-objts" type="password" name="passwd" placeholder="Contraseña" required>
                  <input class="in_btn form-objts" type="submit" name="submit" value="Ingresar">

                </form>

              </div>        
            
                    
              <br><br>
              <br><br><br><br> 
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>