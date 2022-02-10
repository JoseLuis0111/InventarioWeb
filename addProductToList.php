<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_GET['idProd'])){
        header('Location:index.php');
    }

    $idProduct = $_GET['idProd'];
    $name = $_GET['name'];
    $units = $_GET['units'];
    $total = $_GET['Total'];

?>

<div class="Div-productos-lista">
    <span><?php echo $name?></span>
    <span><?php echo $units?></span>
    <span><?php echo "$".$total?></span>
    <span><a href="#" onclick = "hola()">Quitar</a></span>
</div>
