<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<link href="bootstrap/css/bootstrap_asm.min.css" rel="stylesheet"> 
<link href="icomoon.css" rel="stylesheet"> 
<link rel="StyleSheet" href="estilos_asm.min.css" type="text/css">
<a id="arriba"></a>
  <header>
      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Desplegar navegación</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-brand" href="index.php">
                  <img src="img/logoforma.png" alt="sistemasasm">
                </a>
              </div>
              
              <!-- Inicia Menu -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                  <li class="<?= ($pagina_actual == 'index.php') ? 'active' : '' ?>">
                      <a href="index.php">Inicio</a>
                  </li>

                  <li class="<?= ($pagina_actual == 'nosotros.php') ? 'active' : '' ?>">
                      <a href="nosotros.php">Nosotros</a>
                  </li>

                  <li class="<?= ($pagina_actual == 'sistema-administrativo.php') ? 'active' : '' ?>">
                      <a href="sistema-administrativo.php">Sistema Administrativo</a>
                  </li>

                  <li class="<?= ($pagina_actual == 'software-taller.php') ? 'active' : '' ?>">
                      <a href="software-taller.php">Software de Taller</a>
                  </li>

                  <li class="<?= ($pagina_actual == 'planes-precios.php') ? 'active' : '' ?>">
                      <a href="planes-precios.php">Planes y Precios</a>
                  </li>

                  <li class="<?= ($pagina_actual == 'contacto.php') ? 'active' : '' ?>">
                      <a href="contacto.php">Contacto</a>
                  </li>
                </ul>
              
                <form action="#" class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar" />
                  </div>
                  <button type="submit" class="btn btn-default">
                  	<span class="glyphicon glyphicon-search"></span>
                  </button>
                </form>
              </div>
         </div>     
      </nav>
  </header>
  <br> 
