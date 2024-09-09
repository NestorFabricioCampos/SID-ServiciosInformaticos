<?php
header('Content-Type: text/html; charset=UTF-8');
	$destino = "camposf2010@hotmail.com";
	$nombre=$_POST['input-nombre'];
	$email=$_POST['input-email'];
    $telefonoContacto=$_POST['input-telefonoContacto'];
	$mensaje=$_POST['input-mensaje'];
	$contenido = "\nNombre: " . $nombre . "\nEmail: " .$email . "\nTelefono contacto: " .$telefonoContacto . "\nMensaje: " .$mensaje;
	if(mail($destino,"SID Servicios Informáticos", "Datos del email recibido: "."\n". $contenido)){
	//header("Location:mailenviado.html");
}else{
echo "El mensaje no se pudo entregar";
}
?>
