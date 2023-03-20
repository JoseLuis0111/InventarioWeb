<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_GET['id'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $id = $_GET['id'];

    $request = "DELETE FROM Producto WHERE `idProducto` = $id";
    $result = mysqli_query($link,$request);

    if($result){
        //echo "Registro correcto";
        mysqli_close($link);
        header('Location:inventario.php');
    }else{
        echo "Error";
    }

    mysqli_close($link);
?>