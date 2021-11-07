<?php
     $nombre = $_POST['nombre'];
     $correo = $_POST['correo'];
     $telefono = $_POST['telefono'];
     $mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

     $contenido = 'Nombre:  $nombre \n';
     $contenido .= 'Correo:  $correo \n';
     $contenido .= 'Telefono:  $telefono \n';
     $contenido .= 'Mensaje:  $mensaje';
     
     $destino ="sermacisian38@gmail.com";
     $asunto = 'Contacto desde nuestra web';

 
     
    mail($destino, $asunto, $contenido, $header);
    header('Location:../gracias.html');
     
  ?>

