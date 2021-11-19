<html>

<head>
	<style>
		body{
				background-image: url(./img/banner_fondo.jpg);
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				}
	</style>
</head>

<body>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>

</html>



<?php

$destinatario = 'ferfit16@gmail.com';
$from = 'negociosUno@negociosuno.com';
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$ecosistema= $_POST['ecosistema'];
$mensaje= $_POST['mensaje'];
$contenido = "Nombre: " . $nombre .  "\nTelefono: " . $telefono ."\nEmail: " . $email . "\nEcosistema solicitado: " . $ecosistema . "\nMensaje: " . $mensaje;


$asunto = "Mensaje nuevo";

$headers = "From: ".$from;


if (!empty($nombre) & !empty($telefono) & !empty($email) & !empty($ecosistema) & !empty($mensaje) ) {
	mail($destinatario, $asunto, $contenido, $headers);
	echo "<script>
			Swal.fire({
				 icon: 'success',
				  title: 'Tu mensaje se ha enviado exitosamente',
				  showConfirmButton: false,
				 timer: 4000
			})
	</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",2000)</script>";
} else {
	echo "<script>
			Swal.fire({
				 icon: 'error',
				  title: 'Debe completar todos los campos.',
				  showConfirmButton: false,
				 timer: 4000
			})
	</script>";
	echo "<script> setTimeout(\"location.href='index.html#contacto'\",2000)</script>";
}


?>