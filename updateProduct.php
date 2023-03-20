<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_GET['idProducto'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $id = $_GET['idProducto'];

    $Name = trim($_POST['name']);
    $Price = $_POST['price'];
    $Units = $_POST['units'];
    $Type = trim($_POST['type']);

    $ImageName = $_FILES['image']['name'];
    $ImageType = $_FILES['image']['type'];
    $ImageSize = $_FILES['image']['size'];

    $ImageLocation = $_SERVER['DOCUMENT_ROOT'] . '/InventarioWeb/ImagenesProductos/';

    if($ImageSize <= 3000000){

        if($ImageType == 'image/jpeg' || $ImageType == 'image/jpg' || $ImageType == 'image/png' || $ImageType == 'image/gif'){
            move_uploaded_file($_FILES['image']['tmp_name'],$ImageLocation . $ImageName);
            $request = "UPDATE Producto SET `Nombre`='$Name', `Precio`='$Price', `Unidades`='$Units', `Tipo`='$Type', `Imagen`='$ImageName' WHERE `idProducto` = $id";
            $result = mysqli_query($link,$request);
        }else{
            echo "Formato de imagen incompatible<br>";
        }

    }else{
        echo "Imagen demasiado grande<br>";
    }

    if($result){
        //echo "Registro correcto";
        mysqli_close($link);
        header('Location:inventario.php');
    }else{
        echo "Error";
    }

    mysqli_close($link);
?>