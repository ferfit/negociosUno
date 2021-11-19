<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
				width: 100%;
				height: 100vh;
				
				}
		.fondo{
			width: 100%;
			height: 100vh !important;
			background-image: linear-gradient(0deg, rgba(66,84,101,0.8), rgba(66,84,101,0.8)), url(./img/banner__fondo.jpg);
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;

		}
	</style>
</head>

<body>
	<div class="fondo">

	</div>
	

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