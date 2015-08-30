<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Felicidades</title>
</head>
<body>
	<?php

		$mensaje = $_POST['mensaje'];

		$mensaje.= "\n---------------------\n";

		$mensaje.= "\nDe: ". $_POST['nombre'];

		$mensaje.= "\nE-mail: ".$_POST['email'];

		//En la siguiente linea ingresamos nuestra dirección de correo

		$destino = "giowebsites@outlook.com";

		$remitente = $_POST['email'];

		$asunto = "mensaje enviado por: ".$_POST['nombre'];

		mail($destino,$asunto,$mensaje, "FROM: $remitente");

		//El mensaje que se mostrará al confirmar el envio

		echo "Mensaje enviado. Gracias por contactarnos";

	?>
</body>
</html>