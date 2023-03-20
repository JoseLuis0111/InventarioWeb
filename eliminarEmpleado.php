<?php

    session_start();
    
    if(!isset($_SESSION['email']) || empty($_REQUEST['id'])){
      header('Location:empleados.php');
    }

    require('link_db.php');

    $idEmp = $_REQUEST['id'];

    $request = "DELETE FROM `Empleado` WHERE `idEmpleado` = $idEmp";
    $result = mysqli_query($link,$request);
    mysqli_close($link);
    header('Location:empleados.php');

?>