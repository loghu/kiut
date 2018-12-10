<?php
session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<LINK rel="Shortcut Icon" href="css/image/icono.ico">
    <style media="screen">
      body{
				background: #FFFF00;
				background-image: url(css/image/ingrediente.jpg)
      }
			.navbar{
        background: white;
      }
    </style>
  </head>
  <body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="menua.php">Menu</a></li>
					<li><a href="venta.php">Venta</a></li>
					<li><a href="promocion.php">Promociones</a></li>
					<li><a>        <?php
					            echo $_SESSION['usuario'] ;
					          ?>
									</a></li>
					<li>	<a href ="../controlador/exit.php" class = "salir">Salir</a></li>
			</div>
		</nav>
	<!--	<div class="page-header">
  <h1>ADMINISTRADOR <small>Buenas tardes</small></h1>
</div>-->

    <div class="panel panel-primary">
  <div class="panel-body">
		<table class="table">
  <thead class="thead-dark">
    <tr>
			<th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Promocion</th>
      <th scope="col">Venta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Hugo</td>
      <td>Dos por uno</td>
      <td>15/Noviembre/2018</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ever</td>
      <td>Pizaa familiar</td>
      <td>22/Noviembre/2018</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>juan jose</td>
      <td>Alitas</td>
      <td>20/Noviembre/2018</td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="panel-footer">Contenido</div>
</div>

  </body>
</html>

<?php
	}
	else{
		echo "<script type='text/javascript'>
                alert('Debe iniciar sesión');
                window.location.href='index.php';
            </script>";
		}
?>
