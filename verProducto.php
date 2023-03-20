<?php
              session_start();
              if(!isset($_SESSION['email']) || empty($_REQUEST['id'])){
                header('Location:inventario.php');
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
              <h1>Producto</h1>
              <br><br>

                <div class="verProducto">

                  <?php

                    require('link_db.php');

                    $idProd = $_GET['id'];

                    $request = "SELECT `Nombre`, `Precio`, `Unidades`, `Tipo`, `Imagen` FROM `Producto` WHERE `idProducto` = $idProd";
                    $result = mysqli_query($link,$request);
                    mysqli_close($link);
                    $datos = mysqli_fetch_array($result);

                  ?>
                  
                  <div class="datos-producto">
                    <div><img src="/InventarioWeb/ImagenesProductos/<?php echo $datos["Imagen"] ?>" alt="<?php echo $datos["Imagen"] ?>" class="img-ver-product"></div>
                    <div class="div-datos-producto-filas">
                      <span class="texto-ver-producto"><?php echo $datos["Nombre"] . "<br>";?></span>
                      <span class="texto-ver-producto"><?php echo "Precio: $" . $datos["Precio"] . "<br>";?></span>
                      <span class="texto-ver-producto"><?php echo "Tipo: " . $datos["Tipo"] . "<br>";?></span>

                      <div class="div-units">

                      <span class="texto-ver-producto texto-unidades">Unidades:</span>

                      <span>
                        <form action="unitsUpdate.php?id=<?php echo $idProd;?>" method="post" class="form-update-units">
                          <div class="form-update-units-div">
                            <input type="number" name="units-update" step="1" class="actualizar-unidades" value="<?php echo $datos["Unidades"] ?>"> 
                            <input type="submit" value="Actualizar" id="btn-actualizar-unidades" class="actualizar-unidades-btn">
                          </div>
                        </form>
                      </span>

                      </div>
                      

                    </div>

                    <a id="btn-eliminar" class="eliminar-btn"> Eliminar </a>
                    <a href="editarProducto.php?id=<?php echo $idProd; ?>" class="editar-btn"> Editar </a><br><br>

                    <div id="divConfirmEliminar" class="div-confirmacion-eliminar mostrar-confirmacion">
                        <br>
                        <span>¿Está seguro de que desea eliminar este producto?</span>
                        <br>

                        <div class="opciones-eliminar">
                            <span><a href="eliminarProducto.php?id=<?php echo $idProd; ?>" class="eliminar-btn" onclick="confirmar()"> Sí </a></span>
                            <span><a id="btn-no" class="eliminar-btn-no" > No </a></span><br><br>
                        </div>
                        
                    </div>
                       
                  </div>

                  

                </div>

                    

              
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/funciones.js"></script>
            <script src="js/scripts.js"></script>
    </body>
</html>