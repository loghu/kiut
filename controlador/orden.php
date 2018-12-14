<?php
include("../modelo/conexion.php");

$p = $_POST['pi'];
$tam = $_POST['ta'];
$ha = $_POST['hg'];
$al = $_POST['a'];
$can = $_POST['ca'];
$be = $_POST['b'];
$tama = $_POST['tam'];

$obj = new conexion;
$obj->orden($p,$tam,$ha,$al,$can,$be,$tama);
$obj->cerrar();
?>
<?php
session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <LINK rel="Shortcut Icon" href="css/image/icono.ico">
      <style media="screen">
      body{
        /*background-image: url(../imagenes/mantel.jpg)*/
				background: #000000;
      }
      </style>
    <title>lista</title>

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
					<li><a>        <?php
					            echo $_SESSION['usuario'] ;
					          ?>
									</a></li>
					<li>	<a href ="../controlador/exit.php" class = "salir">Salir</a></li>
      </div>
    </nav>

    <div class="panel panel-primary">
      <div class="panel-heading">Pedido de:  <?php
									echo $_SESSION['usuario'] ;
								?></div>
      <div class="panel-body">
    Productos
      <div class="panel panel-danger">
      <div class="panel-heading">Orden</div>
      <div class="panel-body">
        <h3>Lista de productos:</h3><br>
        <?php
        echo "Pizza:  "; echo $p;
        ?><br><?php
        echo "Tamaño:  "; echo $tam;
        ?><br><?php
        echo "Hambuguesa:  ";echo $ha;
        ?><br><?php
        echo "Alitas:  ";echo $al;
        ?><br><?php
        echo "Cantidad:  ";echo $can;
        ?><br><?php
        echo "Bebida:  ";echo $be;
        ?><br><?php
        echo "Tamaño:  ";echo $tama;
         ?>
         <br>
         <br>
         <form action="../vista/home.php">
					 <SCRIPT LANGUAGE="JavaScript">
	  		    	function hola () {
	 		      		alert ("Aceptar la orden");
	 		                 }
	 		   					 </SCRIPT>
        <button type="submit" class="btn btn-success" onclick="hola()">Aceptar   orden</button>
      </form>
			 	<SCRIPT LANGUAGE="JavaScript">
 		    	function mi_alerta () {
		      		alert ("Esta seguro de cancelar");
		                 }
		   					 </SCRIPT>
			<form class="" action="../vista/pedido.php">
				<button class="btn btn-success"type="submit" name="button" onClick="mi_alerta()">Cancelar orden</button>

			</form>

    </div>
    </div>
    </div>
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
