<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_GET['id'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $idProducto = $_GET['id'];
    $units = $_POST['units-update'];

    //$request = "INSERT INTO `Empleado`(`Nombre`, `ApellidoPat`, `ApellidoMat`, `Email`, `Passwd`) VALUES('$firstName','$lastName','$lastName2','$email','$passwd')";
    $request = "UPDATE `Producto` SET `Unidades`='$units' WHERE `idProducto` = $idProducto";
    $result = mysqli_query($link,$request);

    if($result){
        //echo "Registro correcto";
        mysqli_close($link);
        header("Location:verProducto.php?id=$idProducto");
    }else{
        echo "Error";
    }

    mysqli_close($link);
?>