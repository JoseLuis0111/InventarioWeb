<?php
    require('link_db.php');

    $firstName = trim($_POST['FirstName']);
    $lastName = trim($_POST['LastName']);
    $lastName2 = trim($_POST['LastName2']);
    $email = trim($_POST['Email']);
    $passwd = trim($_POST['Passwd']);

    $request = "INSERT INTO Empleado VALUES(0,'$firstName','$lastName','$lastName2','$email','$passwd')";
    $result = mysqli_query($link,$request);

    if($result){
        //echo "Registro correcto";
        session_start();
        $_SESSION['email'] = $email;
        mysqli_close($link);
        header('Location:home.php');
    }else{
        echo "Error";
        mysqli_close($link);
    }
?>