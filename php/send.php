<?php

    if(isset($_POST['send'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msj'])){
            $destinatario = 'tomypalavecino17@gmail.com';

            $name = $_POST['name'];
            $asunto = "Mensaje de Portafolio";
            $email = $_POST['email'];
            $msj = $_POST['msj'];


            $mensajeCompleto= $msj . "\nAtentamente: " . $name;

            $mail = mail($destinatario, $asunto, $email, $mensajeCompleto);
            

            if($mail){
                echo "<script>alert('Correo enviado exitosamente')</script>";
                echo "<script> setTimeout(\"location.href='./index.html'\",1000)</script>";
            }


        }
    }

?>