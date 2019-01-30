<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$Mensaje = $_POST['message'];

$contenido= "Nombre:".$nombre."\nCorreo: ".$mail."\nMensaje:".$Mensaje;

$para = 'dav.castillo0810@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

//header("Location:index.html");
?>
