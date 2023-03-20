<?php
              session_start();
              if( !isset($_SESSION['email']) || empty($_REQUEST['id']) ){
                header('Location:empleados.php');
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
              <h1>Empleado</h1>
              <br><br>

                <div class="list-empleados">

                  <?php

                    require('link_db.php');

                    $idEmp = $_REQUEST['id'];

                    $request = "SELECT `idEmpleado`, `Nombre`, `ApellidoPat`, `ApellidoMat`, `Email` FROM `Empleado` WHERE `idEmpleado` = $idEmp";
                    $result = mysqli_query($link,$request);
                    mysqli_close($link);
                    $datos = mysqli_fetch_array($result);

                  ?>
                    <div class="Div-datos-lista-empleado">
                          <span>ID</span>
                          <span>Nombre</span>
                          <span>Apellido Paterno</span>
                          <span>Apellido Materno</span>
                          <span>Correo electrónico</span>
                    </div>

                    <div class="datos-usuario">
                        <span><?php echo $datos["idEmpleado"];?></span>
                        <span><?php echo $datos["Nombre"];?></span>
                        <span><?php echo $datos["ApellidoPat"];?></span>
                        <span><?php echo $datos["ApellidoMat"];?></span>
                        <span><?php echo $datos["Email"];?></span>
                    </div>

                    <a id="btn-eliminar" class="eliminar-btn"> Eliminar </a>
                    <a href="editarEmpleado.php?id=<?php echo $datos["idEmpleado"]; ?>" class="editar-btn"> Editar </a><br><br>

                </div>

                    <div id="divConfirmEliminar" class="div-confirmacion-eliminar mostrar-confirmacion">
                        <br>
                        <span>¿Está seguro de que desea eliminar a este usuario?</span>
                        <br>

                        <div class="opciones-eliminar">
                            <span><a href="eliminarEmpleado.php?id=<?php echo $datos["idEmpleado"]; ?>" class="eliminar-btn" onclick="confirmar()"> Sí </a></span>
                            <span><a id="btn-no" class="eliminar-btn-no" > No </a></span>
                        </div>
                        

                    </div>

              
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/funciones.js"></script>
            <script src="js/scripts.js"></script>
    </body>
</html>