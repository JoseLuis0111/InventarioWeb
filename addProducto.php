<?php

    session_start();
    
    if(!isset($_SESSION['email'])){
        header('Location:index.php');
    }

    require('link_db.php');

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
            $request = "INSERT INTO Producto (`idProducto`, `Nombre`, `Precio`, `Unidades`, `Tipo`, `Imagen`) VALUES (0,'$Name','$Price','$Units','$Type','$ImageName')";
            $result = mysqli_query($link,$request);
        }else{
            echo "Formato de imagen incompatible<br>";
        }

    }else{
        echo "Imagen demasiado grande<br>";
    }

    mysqli_close($link);
    header('Location:inventario.php');
    

    /*
    if(move_uploaded_file($_FILES['image']['tmp_name'],$ImageLocation . $ImageName)){
        echo 'Ok<br>';
    }else{
        echo 'Error<br><br>';
    }*/

    /*
    echo "Nombre imagen: " . $ImageName . "<br>";
    echo "Tipo: " . $ImageType . "<br>";
    echo "Tamaño: " . $ImageSize . "<br>";

    echo "Ruta destino: " . $ImageLocation;
    */

?>