<?php
		session_start();
		//$nombre = utf8_decode($_POST['nombre']);
		//$ciudad = utf8_decode($_POST['ciudad']);
		//$telefono = utf8_decode($_POST['telefono']);
		//$correo = $_POST['email'];
		$contenido = utf8_decode($_POST['mensaje']);
		
	if($contenido != ""){
		$header = "From: torontofastfoodyparrilla@gmail.com  \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/html";
		
		//$mensajeCorreo = '<b>Nombre: </b>'.$nombre.'<br>';
		//$mensajeCorreo .= '<b>Ciudad: </b>'.$ciudad.'<br>';	
		//$mensajeCorreo .= '<b>Telefono: </b>'.$telefono.'<br>';
		//$mensajeCorreo .= '<b>E-mail: </b>'.$correo.'<br>';
		$mensajeCorreo .= '<b>Mensaje: </b>'.$contenido.'<br>';	
		$asunto = "CONTACTO DESDE PAGINA WEB WWW.TORONTOFASTFOOD.NET";

		$correo = 'torontofastfoodyparrilla@gmail.com';
		$correo2 = 'gerenciaprograma2@gmail.com';
		//$correo3 = 'darien@costiky.com';
		mail($correo, $asunto, utf8_decode($mensajeCorreo), $header);
		mail($correo2, $asunto, utf8_decode($mensajeCorreo), $header);
		//mail($correo3, $asunto, utf8_decode($mensajeCorreo), $header);
		
		header('Location: ../index.html');
	}
	else 
		header('Location: ../index.html');

	function validarCorreo($email){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}
?>