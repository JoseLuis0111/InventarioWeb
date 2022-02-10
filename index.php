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
            <h1>Bienvenido</h1>

            
              <div class = "in_btns_div">
                
                <p class = "subtit">Elija una opción:</p>

                <a href="login.php" class = "in_btn">Ingresar</a> 

                <a href="signup.php" class = "in_btn">Registrarse</a>

              </div>

                           
              <br><br>
              <br><br><br><br> 
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>