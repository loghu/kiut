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
				.section{background-color: blue}
				.pedido{background-color: brown;
				opacity: 0.8;
				padding: 20px;
				height: 50%;
				width: 35%;
				margin-left: 5%;
				margin-right: 0%;
				text-align: center;
				margin-top: 0%;
				margin-bottom: 10%;
				font-size: 20px;
				border-radius: 20px;}
				.promo{background-color: brown;
				opacity: 0.8;
				padding: 20px;
				height: 50%;
				width: 35%;
				margin-left: 60%;
				margin-right: 0%;
				text-align: center;
				margin-top: 0%;
				margin-bottom: 10%;
				font-size: 20px;
				border-radius: 20px;}

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
			<span class="hide-on-tablet">&nbsp; Cliente </span>
		</div>
		<nav class="full-width">
			<ul class="full-width list-unstyle menu-principal">
				<li class="full-width">
					<a href="home.html" class="full-width">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-view-dashboard"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							CONTENIDO
						</div>
					</a>
				</li>
				<li class="full-width divider-menu-h"></li>
				<li class="full-width">
					<a href="#!" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-pizza"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							PIZZAS
						</div>
						<span class="zmdi zmdi-chevron-left"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="company.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-pizza"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Hawaina
								</div>
							</a>
						</li>
						<li class="full-width" action="piza.php" method="post">
							<a href="providers.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-pizza"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Mexicana
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="payments.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-pizza"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								De peperoni
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-pizza"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Carnes frias
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-pizza"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Tlaxiaqueña
								</div>
							</a>
						</li>
					</ul>
				</li>


				<li class="full-width">
					<a href="#!" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-flower"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							HAMBURGUESAS
						</div>
						<span class="zmdi zmdi-chevron-left"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="company.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-flower"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Hawaina
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="providers.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-flower"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Especial
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="payments.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-flower"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Doble carne
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-flower"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Res
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-flower"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Pollo
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width">
					<a href="#!" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-label"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							ALITAS
						</div>
						<span class="zmdi zmdi-chevron-left"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="company.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								BBQ
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="providers.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Acidas
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="payments.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Abanero
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Chipotle
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Tlaxiaqueña
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width">
					<a href="#!" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-glass"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							BEBIDAS
						</div>
						<span class="zmdi zmdi-chevron-left"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="company.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Coca-cola
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="providers.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Pepsi
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="payments.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Fanta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Manzanita
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="categories.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
								Jugos
								</div>
							</a>
						</li>
					</ul>
				</li>


				<li class="full-width divider-menu-h"></li>
				<li class="full-width">
					<a href="#!" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="zmdi zmdi-phone"></i>
						</div>
						<div class="navLateral-body-cr hide-on-tablet">
							PROMOCIONES
						</div>
						<span class="zmdi zmdi-chevron-left"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="#!" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Dos por uno
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="#!" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-label"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Pizza familiar y refresco
								</div>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</section>

	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width text-center" style="padding: 15px 0;">
			<h1 class="text-center tittles">Pizzeria DAVIS"</h1>
			<!-- Tiles -->
			<form class="full-width pedido" >
				<label for=""> PEDIDO</label><br>
				<input type="text" name="pas" class="caja" value="" placeholder="pizaa" ><br>
				<input type="text" name="pas" class="caja" value="" placeholder="tamaño"><br>
				<input type="text" name="pas" class="caja" value="" placeholder="hamburguesa"><br>
				<input type="text" name="pas" class="caja" value="" placeholder="alitas"><br>
				<input type="text" name="pas" class="caja" value="" placeholder="cantidad de piezas"><br>
				<input type="text" name="pas" class="caja" value="" placeholder="bebida"><br>
				<input type="text" name="pas" class="caja" value="" placeholder="tamaño"><br>
				<input type="submit" name="ace" value="Aceptar" class="botona"> <br>
			</form>
			<form class="full-width promo" >
				<label for="">PROMOCIONES</label>
			</form>
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
