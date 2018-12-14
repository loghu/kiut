<?php
session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> PROMOCIONES </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <LINK rel="Shortcut Icon" href="css/image/icono.ico">
    <style media="screen">
      body{
        background: #000000;
			}
      .navbar{
        background: white;
      }
			img{
				text-align: center;
			}

			.card{
				text-align: center;
			}
			h5{
				font-size: 30px;
			}
			p{
				font-size: 20px;
			}

      </style>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Menu</a></li>
          <li><a href="venta.php">Venta</a></li>
          <li><a href="pedido.php">ordenar</a></li>
          <li><a href="promocion.php">Promociones</a></li>
      </div>
    </nav>

<div class="panel panel-primary">
      <div class="panel-heading">Observa nuestras promociones</div>
      <div class="panel-body">
    Promociones
      <div class="panel panel-danger">
      <div class="panel-heading">Lunes</div>
      <div class="panel-body">
        Promociones:<br>
				<div class="row">
	  <div class="col-sm-6">
	    <div class="card" actio"home.php">
				  <img class="card-img-top" src="../imagenes/4.png" alt="Card image cap">
					<SCRIPT LANGUAGE="JavaScript">
						 function tu () {
							 alert ("Aceptar la orden");
											}
									</SCRIPT>
	      <div class="card-body">
					<h5 class="card-title">Promocion del dia</h5>
					<p class="card-text">Orden de alitas + coca.cola de 600 ml por $80.</p>
					<a href="home.php" type="submit"class="btn btn-primary" onclick="tu()">aceptar</a>
	      </div>
	    </div>
	  </div>
		<div class="card" actio"home.php">
				<img class="card-img-top" src="../imagenes/4.png" alt="Card image cap">
				<SCRIPT LANGUAGE="JavaScript">
					 function tu () {
						 alert ("Aceptar la orden");
										}
								</SCRIPT>
			<div class="card-body">
				<h5 class="card-title">Promocion del dia</h5>
				<p class="card-text">pizza mediana + pepsi 1.5 litros por $150</p>
				<a href="home.php" type="submit"class="btn btn-primary" onclick="tu()">aceptar</a>
			</div>
		</div>
	</div>
    </div>
    <div class="panel-heading">Martes</div>
    <div class="panel-body">
      Promociones:<br>
			<div class="row">
  <div class="col-sm-6">
    <div class="card" actio"home.php">
			  <img class="card-img-top" src="../imagenes/4.png" alt="Card image cap">
				<SCRIPT LANGUAGE="JavaScript">
					 function tu () {
						 alert ("Aceptar la orden");
										}
								</SCRIPT>
      <div class="card-body">
				<h5 class="card-title">Promocion del dia</h5>
				<p class="card-text">Todas nuestras pizzas al dos por uno.</p>
				<a href="home.php" type="submit"class="btn btn-primary" onclick="tu()">aceptar</a>
      </div>
    </div>
  </div>
	<div class="card" actio"home.php">
			<img class="card-img-top" src="../imagenes/4.png" alt="Card image cap">
			<SCRIPT LANGUAGE="JavaScript">
				 function tu () {
					 alert ("Aceptar la orden");
									}
							</SCRIPT>
		<div class="card-body">
			<h5 class="card-title">Promocion del dia</h5>
			<p class="card-text">Orden de alitas + coca.cola de 600 ml por $80.</p>
			<a href="home.php" type="submit"class="btn btn-primary" onclick="tu()">aceptar</a>
		</div>
	</div>
</div>
		<!--	<div class="card" style="width: 50rem;">
				<img class="card-img-top" src="../imagenes/4.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Promocion del dia</h5>
					<p class="card-text">Orden de alitas + coca.cola de 600 ml por $80.</p>
				</div>
			</div>-->

    <!--  <img src="../imagenes/3.png" alt="" class="img-thumbnail"><br>-->
		<!--<form class="" action="home.php" >
			<SCRIPT LANGUAGE="JavaScript">
				 function tu () {
					 alert ("Aceptar la orden");
									}
							</SCRIPT>
							  <button type="submit" class="btn btn-info" onclick="tu()">Aceptar</button>
		</form>

    </div>
    <div class="panel-heading">Miercoles</div>
    <div class="panel-body">
      Promociones<br>
      <button type="button" class="btn btn-info">Información</button>
    </div>
    <div class="panel-heading">Jueves</div>
    <div class="panel-body">
      Promociones<br>
      <button type="button" class="btn btn-info">Información</button>
    </div>
    <div class="panel-heading">Viernes</div>
    <div class="panel-body">
      Promociones<br>
      <button type="button" class="btn btn-info">Información</button>
    </div>
    <div class="panel-heading">Sabado</div>
    <div class="panel-body">
      Promociones<br>
      <button type="button" class="btn btn-info">Información</button>
    </div>
    <div class="panel-heading">Domingo</div>
    <div class="panel-body">
      Promociones<br>
      <button type="button" class="btn btn-info">Información</button>-->
    </div>
    </div>
    </div>
  </body>
</html>

<?php
}else{		echo "<script type='text/javascript'>
                alert('Debe iniciar sesión');
                window.location.href='../vista/index.php';
            </script>";
          }
           ?>
