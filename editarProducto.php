<?php
              session_start();

              if( !isset($_SESSION['email']) || empty($_REQUEST['id']) ){
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
                <h1>Editar producto</h1>
                <br><br>

                <?php

                    require('link_db.php');

                    $idProd = $_GET['id'];

                    $request = "SELECT `Nombre`, `Precio`, `Unidades`, `Tipo` FROM `Producto` WHERE `idProducto` = $idProd";
                    $result = mysqli_query($link,$request);
                    mysqli_close($link);
                    $datos = mysqli_fetch_array($result);

                  ?>

                <div class="div-addProducto">


                  <div class="div-addProd-Form">


                    <form class="addProd-form" action="updateProduct.php?idProducto=<?php echo $idProd ?>" method="post" enctype="multipart/form-data">

                        <label for="Name" class="label-text" >Nombre:</label><br>
                        <input class="add-form-objts" type="text" name="name" placeholder="Ingrese el nombre del producto" value="<?php echo $datos['Nombre'] ?>" autofocus required>
                        
                        <div class="precio-unidades">

                          <div>
                            <label for="price" class="label-text">Precio:</label><br>
                            <input type="number" name="price" min="0" step="0.01" placeholder="$..." value="<?php echo $datos['Precio'] ?>" class="add-form-objts" required>
                          </div>
                          
                          <div>
                            <label for="units" class="label-text">Unidades:</label><br>
                            <input type="number" name="units" min="1" placeholder="0" value="<?php echo $datos['Unidades'] ?>" class="add-form-objts" required>
                          </div>
                          
                        </div>

                        <div class="tipo-subirImagen">

                          <div>
                            <label for="type" class="label-text">Seleccione el tipo de producto:</label><br>
                            <select name="type" class="add-form-objts" required>
                                <option value="Alimentos">Alimentos</option>
                                <option value="Limpieza">Limpieza</option>
                                <option value="Otros">Otros</option>
                            </select><br>
                          </div>

                          <div>
                            <label for="image" class="label-text">Agregar imagen:</label><br>
                            <input type="file" name="image" class="addImage" required>
                          </div>

                        </div>

                        <input class="addProdBtn" type="submit" name="submit" value="Actualizar producto">

                    </form>

                  </div>

                </div>
                    
            </div>

            <footer class="footer">Abarrotes Polito</footer>
            <script src="js/scripts.js"></script>
    </body>
</html>