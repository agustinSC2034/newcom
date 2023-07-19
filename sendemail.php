<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) ){
$to = "aguustinn18@gmail.com";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["name"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Asunto: ".$_POST["asunto"]."\n\n";
$contenido .= "Cantidad: ".$_POST["phone"]."\n\n";
$contenido .= "Comentario: ".$_POST["message"]."\n\n";
$header = "From: agustin.scutari@it-tel.com.ar\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
}
}
?>