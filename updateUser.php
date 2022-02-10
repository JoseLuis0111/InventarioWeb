<?php

    session_start();

    if(!isset($_SESSION['email']) || empty($_GET['id'])){
        header('Location:index.php');
    }

    require('link_db.php');

    $idEmp = $_GET['id'];

    $firstName = trim($_POST['FirstName']);
    $lastName = trim($_POST['LastName']);
    $lastName2 = trim($_POST['LastName2']);
    $email = trim($_POST['Email']);
    $passwd = trim($_POST['Passwd']);

    $request = "UPDATE Empleado SET `Nombre`='$firstName', `ApellidoPat`='$lastName', `ApellidoMat`='$lastName2', `Email`='$email', `Passwd`='$passwd' WHERE `idEmpleado` = $idEmp";
    $result = mysqli_query($link,$request);

    if($result){
        //echo "Registro correcto";
        mysqli_close($link);
        header('Location:empleados.php');
    }else{
        echo "Error";
    }

    mysqli_close($link);
?>