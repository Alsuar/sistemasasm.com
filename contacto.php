<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="DC.title" content="undefined" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<title>Contacto Sistemas Asm</title>
<style type="text/css">
.navbar{
	margin-bottom:0;
}
</style>
</head>
<body> 
<?php include_once("analyticstracking.php") ?>
<!---- Header ---->
<?php include("header.php"); ?>
<main>
	<div class="container"> 
		<section class="padsep thumbnail">
			<div class="row">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Estamos siempre atentos a tus dudas e inquietudes, Comunicate con Nosotros.</h3>
				</div>
			</div>
			<br><br>
			<div class="row">			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<br><br>
					<p><span class="glyphicon glyphicon-map-marker"></span> Panamá Pacifico, Panamá</p>
					<p><span class="glyphicon glyphicon-phone"></span> +507-67236788</p>
					<p><span class="glyphicon glyphicon-envelope"></span> info@sistemasasm.com</p> 

					<br><br>
					<p><span class="glyphicon glyphicon-map-marker"></span> Margarita, Venezuela</p>
					<p><span class="glyphicon glyphicon-phone"></span> +58-412-1629418</p>
					<p><span class="glyphicon glyphicon-envelope"></span> info@sistemasasm.com</p> 
				</div>
		
				<form action="send_email.php" method="post" id="formu_contacto" target="ajax">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="row">
							<br><br>
							<div class="col-sm-12 form-group">
								<input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<input class="form-control" id="telf" name="telf" placeholder="Telefono" type="text" required>
							</div>
							<div class="col-sm-6 form-group">
								<input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
							</div>
						</div>
					  	<textarea class="form-control" id="comments" name="comments" placeholder="Mensaje" rows="5"></textarea><br>
					  <div class="row">
							<div class="col-sm-6 form-group">
								<?php $key = mt_rand(100,1000); echo "<p>Ingrese el siguiente codigo automático para enviar el formulario: <b>$key</b></p>"?>
								<input class="form-control" id="key_aut" name="key_aut" type="hidden" value="<?php echo $key ?>">

							</div>
							<div class="col-sm-6 form-group">
								<input class="form-control" id="key" name="key" placeholder="Codigo Automático para enviar formulario" type="text" maxlength="3" required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group"></div>
							<div class="col-sm-6 form-group">
								<button class="btn btn-default" type="reset">Limpiar Formulario</button>
								<button class="btn btn-default" type="submit">Enviar</button>
								<br><br>
							</div>
						</div> 
					</div>
				</form>
			</div>
	    </section>
	</div>
</main>
<br>
<!-- Footer -->
<footer>
  <?php include("footer.php"); ?>
</footer>
<iframe name="ajax" style="display:none;"/>

</body>
</html>