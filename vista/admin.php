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
    <style media="screen">
      body{
        background: red;
      }

    </style>
  </head>
  <body>
		<div class="page-header">
  <h1>ADMINISTRADOR <small>Buenas tardes</small></h1>
</div>
    <nav class="navBar-options-list">
      <ul class="list-unstyle">
        <li class="btn-Notification" id="notifications">
          <!--<i class="zmdi zmdi-notifications"></i>
           <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
          <div class="mdl-tooltip" for="notifications">Cerrar Sesión</div>
          <a href ="../controlador/exit.php" class = "salir">Salir</a>
        </li>
				<!--<li class="btn-exit" id="btn-exit">
          <i class="zmdi zmdi-power"></i>
          <div class="mdl-tooltip" for="btn-exit">Salir</div>
        </li>-->
        <li class="text-condensedLight noLink" >
          <small>
          <?php
            echo $_SESSION['usuario'] ;
          ?>
          </small>
        </li>
      </ul>
    </nav>
    <div class="panel panel-primary">
  <div class="panel-body">
    Contenido del panel
  </div>
  <div class="panel-footer">Pie del panel</div>
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
