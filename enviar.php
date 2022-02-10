<?php
//variables
$name = $_POST['nombre'];
$phone = $_POST['telefono'];
$email = $_POST['email'];
$msg = $_POST['mensaje'];

// Datos
$Content = "Nombre: $name\nTelefono: $phone\nCorreo: $email\nMensaje:\n $msg";

$destino = "comentarios354@gmail.com";
$asunto = "Mensaje de contacto";


$respuesta = $_POST['g-recaptcha-response'];
$key = "6LcmlMUUAAAAAAo_-JeVoyUgvbv7vQw9_cSI95F3";
$ip = SERVER['REMOTE_ADDR'];
$url = 'https://www.google.com/recaptcha/api/siteverify';

$comprobacion = file_get_contents("$url?secret=$key&response=$respuesta&remoteip=$ip");
$confirmacion = json_decode($comprobacion,true);
if($confirmacion['success']){
    if ($_POST['submit']) {
    mail($destino,$asunto,$Content);
    echo "<script>alert('Mensaje enviado exitosamente');</script>";
    $regresar = file_get_contents("contacto.html");
    echo $regresar;
    //header('Location:contacto.html');
    }
} else {
    //echo "robot";
    echo "<script>alert('Complete el captcha');</script>";
    $regresar = file_get_contents("contacto.html");
    echo $regresar;
}

?>







