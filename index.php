<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="https://www.sistemasasm.com/"/>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<title>Software Administrativo en la Nube para Inventario y Facturación | Sistemas ASM</title>
	<meta name="description" content="Sistema administrativo en la nube para gestionar inventario, ventas, clientes, bancos, sucursales y facturación electrónica en Panamá y Venezuela.">
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include("header.php"); ?>
	<main>
		<div class="container fblank thumbnail">
			<div id="contenidoAjax" style="position:fixed; margin:10% 0 0 38%;z-index:2000;display: none">
				<p align='center'><img src='img/ajax-loader.gif' /></p>
			</div>
			<div id="resultado"></div>
			<div id="existencia">
				<?php include('modal_contacto.php'); ?> </div>
			<section>
				<div class="image"> 
					<img src="img/home_sistemasasm.webp" alt="Software administrativo en la nube Sistemas ASM" class="img-responsive home-banner-img" width="1052" height="244" fetchpriority="high">

					<div class="hero-banner-text">
						<span class="hero-kicker">EMPRESAS MODERNAS, SOLUCIONES INTELIGENTES</span>

						<span class="hero-title">
							ADMINISTRAR NUNCA
							<br>
							FUE TAN <span class="hero-title-accent">FÁCIL.</span>
						</span>

						<span class="hero-desc">
							Unifique sus operaciones con una plataforma
							<br>
							innovadora y escalable.
						</span>
					</div>
					<span class="caj-btn-layer"> 
						<button class="btn btn-primary" style="border-radius: 0" id="btn_contacto_ban">PRUÉBALO GRATIS</button> 
					</span> 
				</div>
			</section>
			<div class="tagline">
				<h1>Software Administrativo en la Nube para Inventario, Ventas y Facturación</h1>
			</div>
			<div class="container marketing">
				<div class="featuretit">
					<div class="row">
						<div class="col-lg-12">
							<p class="intro-home">
								Sistemas ASM centraliza la gestión de tu empresa en una sola plataforma. 
								Controla inventario, ventas, clientes, proveedores, bancos, sucursales, reportes y facturación electrónica desde cualquier lugar. 
								Nuestro software administrativo está diseñado para empresas que necesitan trabajar de forma organizada, rápida y segura en Panamá y Venezuela.
							</p>
						</div>

					</div>
				</div>

				<h2 class="sr-only">Módulos del software administrativo</h2>

				<section class="features">
					<div class="row">
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/gestion_inventario.webp" alt="Gestión de inventario con software administrativo en la nube"></a>
									<h3>GESTIÓN DE INVENTARIOS</h3>
									<p class="leadtxt">Controla existencias, movimientos y productos sin depender de hojas de Excel.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/gestion_ordenes.webp" alt="Gestión de órdenes de compra y venta en Sistemas ASM"></a>
									<h3>GESTIÓN DE ÓRDENES</h3>
									<p class="leadtxt">Crea órdenes de compra, ventas, facturas y notas de entrega de forma rápida.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/taller.webp" alt="Módulo de taller mecánico con órdenes de servicio"></a>
									<h3>MÓDULO DE TALLER</h3>
									<p class="leadtxt">Aumenta la productividad, la eficacia y los ingresos con nuestro Sistema de Taller.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/reportes.webp" alt="Reportes inteligentes de ventas e inventario"></a>
									<h3>REPORTES INTELIGENTES</h3>
									<p class="leadtxt">Consulta ventas, productos destacados e indicadores para tomar mejores decisiones.</p>
								</div>
							</div>
						</article>
					</div>
					<div class="row">
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/gestion_almacenes.webp" alt="Gestión de almacenes y sucursales en la nube"></a>
									<h3>GESTIÓN DE ALMACENES</h3>
									<p class="leadtxt">Optimiza tu cadena de valor, integrando todos tus almacenes en un solo lugar</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/clientes.webp" alt="Gestión de clientes en software administrativo"></a>
									<h3>GESTIÓN DE CLIENTES</h3>
									<p class="leadtxt">Gestiona la relación con tus clientes fácilmente y en un solo lugar.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/bancos.webp" alt="Gestión de bancos cuentas por cobrar y cuentas por pagar"></a>
									<h3>GESTIÓN DE BANCOS</h3>
									<p class="leadtxt">Controla ingresos, egresos, cuentas por cobrar y cuentas por pagar.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/dispositivos.webp" alt="Software administrativo compatible con computadora tablet y celular"></a>
									<h3>TODOS TUS DISPOSITIVOS</h3>
									<p class="leadtxt">Úsalo desde tu smartphone, tablet o computadora de escritorio</p>
								</div>
							</div>
						</article>
					</div>
					<div class="row">
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/proovedores.webp" alt="Gestión de proveedores en software administrativo"></a>
									<h3>GESTIÓN DE PROVEEDORES</h3>
									<p class="leadtxt">Mantén la información de tus proveedores siempre a la mano.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/sucursales.webp" alt="Gestión de sucursales con sistema de ventas e inventario"></a>
									<h3>GESTIÓN DE SUCURSALES</h3>
									<p class="leadtxt">Sincroniza todas tus sucursales en un solo lugar</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/sistema_online.webp" alt="Sistema administrativo 100% en la nube"></a>
									<h3>100% EN LA NUBE</h3>
									<p class="leadtxt">Accede al sistema desde cualquier lugar, solo necesitas una conexión a Internet.</p>
								</div>
							</div>
						</article>
						<article class="feature">
							<div class="col-lg-3">
								<div>
									<a href="sistema-administrativo.php"><img src="img/iconos/soporte.webp" alt="Soporte remoto y presencial para empresas"></a>
									<h3>SOPORTE REMOTO Y PRESENCIAL</h3>
									<p class="leadtxt">Recibe acompañamiento, capacitación y soporte para usar mejor el sistema.</p>
								</div>
							</div>
						</article>
					</div>
				</section>
			</div>

			<section>
				<div class="bloq1">
					<div class="row">
						<div class="col-lg-5">
							<div class="row">
								<div class="col-lg-12">
									<h3>UNA PLATAFORMA PARA CONTROLAR TU EMPRESA</h3>
									<ul>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Inventario, ventas, clientes y proveedores conectados.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Gestión de almacenes, sucursales y bancos en un solo lugar.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Reportes para tomar mejores decisiones de negocio.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Acceso desde la nube sin instalaciones complejas.</li>
									</ul>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<h3>DISEÑADO PARA CRECER CON TU NEGOCIO</h3>
									<ul>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Ideal para empresas que necesitan orden y control administrativo.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Compatible con computadora, tablet y teléfono celular.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Soporte y capacitación para acompañar a tu equipo.</li>
										<li><img src="img/iconos/greencheck-whitebg.webp" alt="" aria-hidden="true" width="16" height="16" loading="lazy"> Solución disponible para empresas en Panamá y Venezuela.</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-7">
							<img src="img/multi-dispositivosv2.webp" alt="Software administrativo en la nube para múltiples dispositivos" class="img-responsive">
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="bloq2">
					<div class="row">
						<div class="col-lg-12">
							<div class="">
								<h2 class="text-center titulo-bloq2">
									Estás a 5 minutos de llevar tu empresa a la nube
								</h2>
								<p class="text-center subtitulo-bloq2">
									Regístrate y solicita una prueba gratis y mejora tu administración a partir de hoy mismo
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<form name="signupForm" id="signupForm" class="col-md-12 ng-pristine ng-valid-email ng-invalid ng-invalid-recaptcha" style="background-color:#a8cecf">
								<div class="col-md-6 col-md-offset-3">
									<div class="input-group margin-bottom-20" style="margin-top: 20px;"> <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;"> <i class="glyphicon glyphicon-briefcase"></i> </span> <input type="text" name="empresa" id="empresa" ng-model="empresa" class="form-control" placeholder="Empresa / Nombre"> </div>
									<div class="input-group margin-bottom-20"> <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;"> <i class="glyphicon glyphicon-envelope"></i> </span> <input type="email" name="email" id="email" ng-model="email" class="form-control" placeholder="Email"> </div>
									<div class="input-group margin-bottom-20"> <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;"> <i class="glyphicon glyphicon-phone"></i> </span> <input type="number" name="telefono" id="telefono" ng-model="telefono" class="form-control" placeholder="Número"> </div>
									<div class="input-group margin-bottom-20"> <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;"> <i class="glyphicon glyphicon-comment"></i> </span> <textarea class="form-control" id="mensaje" placeholder="Mensaje"></textarea> </div>
									<div class="pull-right margin-bottom-20"> <button type="button" id="btn_contacto" class="btn btn-primary">Contáctanos</button> </div>
									<div> <span style="color: red;" class="ng-binding"></span> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main> <br>
	<footer class="">
		<?php include("footer.php"); ?> </footer>
	<script>
		function send_email(emp,email,telf,coment){if (emp.length<1 || email.length<1){alert("Existen datos sin completar.");}else{parametros={'name' : emp, 'email' : email, 'telf' : telf, 'comments' : coment,}; $.ajax({type: "POST", url: "send_email.php", data:parametros, dataType: "html", beforeSend: function(){$("#contenidoAjax").fadeIn('fast');}, error: function(){alert("error petición ajax");}, success: function(data){$("#contenidoAjax").fadeOut(); $("#resultado").append(data); $("#modal_contacto").modal("hide");}});}}$(document).ready(function(){$("#btn_contacto_ban_send").click(function(){var name=$("#empresa1").val(); var email=$("#email1").val(); var telf=$("#telefono1").val(); var coment=$("#mensaje1").val(); if (name.length<1 || email.length<1){alert("Existen datos sin completar.");}else{send_email(name,email,telf,coment);}}); $("#btn_contacto_ban").click(function(){$("#modal_contacto").modal("show");}); $("#btn_contacto").click(function(){var name=$("#empresa").val(); var email=$("#email").val(); var telf=$("#telefono").val(); var coment=$("#mensaje").val(); if (name.length<1 || email.length<1){alert("Existen datos sin completar.");}else{send_email(name,email,telf,coment);}});});
	</script>
</body>
</html>