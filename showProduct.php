<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_REQUEST['idProd'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $idProduct = $_GET['idProd'];

    $request = "SELECT `Nombre`, `Precio`, `Unidades`, `Imagen` FROM `Producto` WHERE `idProducto` = $idProduct";
    $result = mysqli_query($link,$request);
    mysqli_close($link);
    $datos = mysqli_fetch_array($result);

?>
    <div class="producto-venta" >

    <h4><?php echo $datos["Nombre"]?></h4>						  
    
    <img src="/InventarioWeb/ImagenesProductos/<?php echo $datos["Imagen"]?>" alt="Imagen producto" class="img-product">
    <p>Precio: $<?php echo $datos["Precio"]?></p>

    <form action="#" method="post">
      <label for="units">Unidades:</label>
      <input type="number" name="units" id="units" min="1" max="<?php echo $datos["Unidades"]?>" value="1" required class="unidades"><br>
      <input type="button" name="search-btn" value="Agregar" onclick = "addProductToList(<?php echo $idProduct?>,'<?php echo $datos["Nombre"] ?>',<?php echo $datos["Precio"]?>)" class="search-btn">
    </form>

    </div>



                    