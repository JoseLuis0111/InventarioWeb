<?php

    require('link_db.php');

    $email = $_POST['email']; 
    $pswd = $_POST['passwd'];

    $request = "SELECT * FROM `Empleado` WHERE Email = '$email' AND passwd = '$pswd' ";
    $result = mysqli_query($link,$request);

    //Validación: (Se encontraron coincidencias con la busqueda?)
    $ok = mysqli_num_rows($result);

    if($ok){
        //echo "Inicio correcto, bienvenido";
        session_start();
        $_SESSION['email'] = $email;
        mysqli_close($link);   //Cerrar conexión a bd:
        header('Location:home.php');
    }else{
        mysqli_close($link);
        //echo "Datos incorrectos, intente de nuevo"; 
        //<html> <script> window.alert("Datos incorrectos, intente de nuevo") </script> </html>
        header('Location:login.php');
    }

?>