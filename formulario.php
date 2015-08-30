<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Felicidades</title>
</head>
<body>
	<?php
		 $nombre = $_POST["nombre"];

		 $correo = $_POST["correo"];

		 $contenido = $_POST["contenido"];

		 $para = "giovanny.acalderon@hotmail.com";
		 $asunto = "Nuevo Mensaje";
		 
		 $mensaje = "
		 Nombre del remitente: ".$nombre."
		 Correo: ".$correo."
		 Edad: ".$edad."
		 Fecha: ".$fecha."
		 Mensaje: ".$contenido."
		 ";
		 mail ($para,$asunto,utf8_decode($mensaje));
		 
		 echo "<h2>Hemos recibido tu mensaje correctamente, pronto te contestaremos, gracias.</h2>";
	?>
</body>
</html>