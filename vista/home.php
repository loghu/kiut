<?php
session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/principal.css">
	<LINK rel="Shortcut Icon" href="css/image/icono.ico">
	<style media="screen">
				.pageContent{background-image: url(css/image/ingrediente.jpg)}
				.navLateral{background-color: #2EFEF7}
</style>
	<script src="js/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
	</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>

<!-- navBar -->
<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<!--<i class="zmdi zmdi-notifications"></i>
						 <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Cerrar Sesión</div>
						<a href ="../controlador/exit.php" class = "salir">Salir</a>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>
					<li class="text-condensedLight noLink" >
						<small>
						<?php
							echo $_SESSION['usuario'] ;
						?>
						</small>
					</li>

				</ul>
			</nav>
		</div>
	</div>

	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Perfil
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="css/image/logo4.png" alt="Usuario" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						Bienvenido<br>
						<small>
						<?php
							echo $_SESSION['usuario'] ;
						?>
						</small>
					</span>
				</figcaption>
			</figure>
			<div class="full-width tittles navLateral-body-tittle-menu">
				<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; Usuario</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								PRODUCTOS
	</nav>
</div>
	</section>

	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width text-center" style="padding: 40px 0;">
			<h1 class="text-center tittles">Pizzeria Kiut"</h1>
			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						Puntos<br>
						<small>Clientes</small>
					</span>
				</div>
				<i class="zmdi zmdi-account tile-icon"></i>
			</article>
			<article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						<br>
						<small>Promociones</small>
					</span>
				</div>
				<i class="zmdi zmdi-label tile-icon"></i>
			</article>
		</section>
	</section>
</body>
</html>

<?php
	}else{
		echo "<script type='text/javascript'>
                alert('Debe iniciar sesión');
                window.location.href='index.php';
            </script>";
		}
?>
