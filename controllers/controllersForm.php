<?php
    $myEmail= 'jesusesteban12321@gmail.com';
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];
    $contenido='Empleador:'.$nombre.'\nCorreo:'.$email.'\nTelefono:'.$telefono.'\nAsunto.'.$asunto.'\nMensaje:'.$mensaje;
    mail($myEmail, 'Contacto:', $contenido);
    exit('Success!'.' Su correo se a enviado con exito');