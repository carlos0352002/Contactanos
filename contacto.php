<?php 
$destino = "carlosoropeza035@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("Location:gracias.html");
?>