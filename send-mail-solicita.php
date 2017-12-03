<?php
$nombre = $_POST['nameS'];
$mail = $_POST['emailS'];
$empresa = $_POST['messageS'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['messageS'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()) . " \r\n";
$mensaje .= "Origen " . $_POST['origen'] . " \r\n";
$mensaje .= "Destino " . $_POST['destino'] . " \r\n";

$para = 'elplanbgestiones@gmail.com';
$asunto = 'Solicitud de Tarifa.';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>