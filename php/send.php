<?php
    $destinatario = 'tomypalavecino17@gmail.com';

    $name = $_POST['name'];
    $asunto = "Mensaje de Portafolio";
    $email = $_POST['email'];
    $msj = $_POST['msj'];


    $mensajeCompleto= $msj . "\nAtentamente: " . $name;

    mail($destinatario, $asunto, $email, $mensajeCompleto);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='../index.html'\",1000)</script>";

?>