<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Sistemas Asm tu mejor opcion en soluciones tecnologicas">
<meta name="keywords" content="sistema administrativo,sistema de inventario, sistema para taller">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="DC.title" content="undefined" />
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<title>Planes y Precios</title>
<!-- <link rel="StyleSheet" href="estilos.css" type="text/css"> -->
</head>
<body> 
    <?php include_once("analyticstracking.php") ?>
    <!---- Header ---->
	<?php 
		include("header.php");
	?> 
<main>
    <div class="container">
        <div class="padsep thumbnail">
            <section class="planes-section">
                <div class="planes-container">
                    <!-- Plan Mensual -->
                    <div class="plan-card plan-mensual">
                    <div class="plan-header azul">
                        <h2>Plan Mensual</h2>
                    </div>

                    <div class="plan-body">
                        <div class="plan-price">
                        <span class="precio">$65</span>
                        <span class="periodo">/ mes</span>
                        </div>

                        <div class="plan-subtexto">
                        <strong>(Facturado Mensualmente)</strong>
                        </div>

                        <ul class="plan-list">
                        <li>2 Usuarios</li>
                        <li>1 Sucursal</li>
                        <li>Almacenes ilimitados</li>
                        <li>Capacitación</li>
                        <li>Soporte ilimitado</li>
                        <li>Actualizaciones</li>
                        </ul>

                        <div class="extras-box">
                        <h3>Servicios Adicionales (Mensual):</h3>
                        <p>Usuario Extra: <strong>$10 / mes</strong></p>
                        <p>Sucursal Extra: <strong>$25 / mes</strong></p>
                        </div>

                        <a href="contacto.php" class="plan-btn btn-azul">Seleccionar Plan (Mes)</a>
                    </div>
                    </div>

                    <!-- Plan Anual -->
                    <div class="plan-card plan-anual">
                    <div class="plan-header turquesa">
                        <h2>Plan Anual (Pago Unico)</h2>

                        <div class="cinta-ahorro">
                        <span>Ahorra 37%</span>
                        </div>
                    </div>

                    <div class="plan-body">
                        <div class="plan-price">
                        <span class="precio verde">$490</span>
                        <span class="periodo verde-text">/ año</span>
                        </div>

                        <div class="plan-subtexto">
                        <strong>($40.83 / mes equivalente)</strong><br>
                        </div>

                        <ul class="plan-list">
                        <li>2 Usuarios</li>
                        <li>1 Sucursal</li>
                        <li>Almacenes ilimitados</li>
                        <li>Capacitación</li>
                        <li>Soporte ilimitado</li>
                        <li>Actualizaciones</li>
                        </ul>

                        <div class="extras-box">
                        <h3>Servicios Adicionales (Anual):</h3>
                        <p>Usuario Extra: <strong>$100 / año</strong></p>
                        <p>Sucursal Extra: <strong>$250 / año</strong></p>
                        </div>

                        <a href="contacto.php" class="plan-btn btn-turquesa">Seleccionar Plan Anual</a>
                    </div>
                    </div>
                </div>
            </section>

            <section class="planes-beneficios">
                <div class="planes-beneficios-grid">

                    <div class="beneficio-item">
                    <div class="beneficio-icono">
                        <img src="img/iconos/almacenes200.png" alt="Almacenes ilimitados">
                    </div>
                    <h3>Almacenes Ilimitados</h3>
                    </div>

                    <div class="beneficio-item">
                    <div class="beneficio-icono">
                        <img src="img/iconos/usuarios200.png" alt="2 Usuarios Incluidos">
                    </div>
                    <h3>2 Usuarios Incluidos</h3>
                    </div>

                    <div class="beneficio-item">
                    <div class="beneficio-icono">
                        <img src="img/iconos/capacitaciones200.png" alt="Capacitación y Actualizaciones">
                    </div>
                    <h3>Capacitación y Actualizaciones</h3>
                    </div>

                    <div class="beneficio-item">
                    <div class="beneficio-icono">
                        <img src="img/iconos/soporte200.png" alt="Soporte Whatsapp o Llamada">
                    </div>
                    <h3>Soporte Por Whatsapp o Llamada</h3>
                    </div>
                    </br>
                </div>
            </section>
        </div>
    </div>
</main>
<br>
<!---- Footer ---->
<footer>
  <?php include("footer.php"); ?>
</footer>
</body>
</html>