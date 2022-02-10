<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_REQUEST['productName'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $productName = trim($_GET['productName']);

    $request = "SELECT `Nombre`, `idProducto` FROM `Producto` WHERE `Nombre` LIKE '%$productName%'";
    $result = mysqli_query($link,$request);
    mysqli_close($link);
    $filas = mysqli_num_rows($result);

    if($filas > 0){

        while($datos = mysqli_fetch_array($result)){

            ?>
            <a class="searchResultElements" href="#" onclick = "showProduct(<?php echo $datos["idProducto"];?>)">
                <div class="searchResultElementsDiv"><li> <?php echo $datos["Nombre"];?> </li></div>
            </a> 

            <?php
        }
    }
    /*<a href="#"><option value="<?php echo $datos["Nombre"];?>"></a>   */   
?>

                    