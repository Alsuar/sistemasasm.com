<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
<?php
	if ($_POST['key_aut'] == $_POST['key'] && !empty($_POST['name'])){
		// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "info@sistemasasm.com";

		$email_subject = "Contacto desde el sitio web";

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['name'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Telefono: " . $_POST['telf'] . "\n";
		$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";

		$email_from = $_POST['email'];

		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);
		
		echo '<script>
				alert("¡Tu mensaje ha sido enviado, Te responderemos lo antes posible!");
			  </script>';
	}else{
		echo '<script>
				alert("¡Codigo Automatico Incorrecto, Favor vuelva a ingresarlo y enviar el formulario nuevamente!");
			  </script>';		
	}

?>
