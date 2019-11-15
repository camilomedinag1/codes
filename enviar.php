<?php
$nombre =$_POST['nombre'];
$telefono =$_POST['telefono'];
$asunto =$_POST['asunto'];
$empresa =$_POST['mensaje'];
$mail =$_POST['email'];

$hearer ='from: ' . $mail . " \r\n";
$hearer = "xMailer: PHP/" .phpversion() . " \r\n";
$hearer = "Mine-version: 1.0  \r\n";
$hearer = "Content-Type: text/plain";

$mensaje ="Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje ="Su email es: " . $mail . ",\r\n";
$mensaje ="Asunto: " . $asunto . ",\r\n";
$mensaje ="Telefono: " . $asunto . ",\r\n";
$mensaje ="Mensaje: " . $asunto . ",\r\n";
$mensaje ="Enviado el " . date('d/m/Y',time());

$para = 'camilo.medina.galeano@gmail.com';//cambiar correo
$asunto = 'mensaje de paginade codes'

if (mail($para, $asunto, utf8_decode($mensaje), $hearer))
echo "<script type= 'text/javascript' >alert('tu mensaje ha sido enviado');</script>"

?>