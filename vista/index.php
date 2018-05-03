<?php
	session_start();
	session_destroy();

	$c0='style="display:block"';  $c1='style="display:none"';   $c2='style="display:none"';
	$c3='style="display:none"';   $c4='style="display:none"';   $c5='style="display:none"';

  if(isset($_REQUEST["ncapa"])){  $ncapa=$_REQUEST["ncapa"];
  if($ncapa==''){
  $ci="ver=document.getElementById('contenido0');";
  }else{
  $ci="ver=document.getElementById('contenido".$ncapa."');";
  $c0='style="display:none"';   $c1='style="display:none"';   $c2='style="display:none"';
  $c3='style="display:none"';   $c4='style="display:none"';   $c5='style="display:none"';
  if($ncapa==0){ $c0='style="display:block"';}  if($ncapa==1){ $c1='style="display:clock"';}
  if($ncapa==2){ $c2='style="display:block"';}  if($ncapa==3){ $c3='style="display:block"';}
  if($ncapa==4){ $c4='style="display:block"';}  if($ncapa==5){ $c5='style="display:block"';}
  }}?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
  	<title>Kiut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/index.css">
	<LINK rel="Shortcut Icon" href="css/image/icono.ico">
	<style media="screen">
				body{background-image: url(css/image/ingrediente.jpg)}
</style>

  </head>
  <!--<body onload = "<?php echo $ci;?>">-->
  <body>

<div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card container" id="contenido0"<?php echo $c0;?>>

    <form name="login" id="login-form" class="col-lg-12" method="POST" action="../controlador/logeo.php">

        <div class="col-lg-12 logo-kapsul">

			<img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

         <div class="group">
            <input type="text" name="user" id="user" placeholder="Usuario">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>


			</label>
        </div>

        <div class="group">
            <input type="password" name="password" id="password" placeholder="Password">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

			</label>
        </div>

				<div class="col-xs-12 col-sm-12 col-md-12">

				<button type="submit" class="btn btn-lg btn-default btn-block giris-yap-buton" id="envia">Iniciar sesión</button>
					</div>

        <div class="forgot-and-create tab-menu">

            <a class="hesap-olustur-link" href="index.php?ncapa=1">Necesitas registrarte? Registrate Aquí!</a>
        </div>
		<hr><p id="msj" style="color: red;"></p>
    </form>
  </div>

  <div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card" id="contenido1"<?php echo $c1;?>>
        <form id="kayit-form" class="col-lg-12"   method="POST" action="../controlador/registro.php">
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <div class="group">
            <input type="text" name="usuario" id="usuario" required placeholder="Usuario">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

			</label>
        </div>
        <div class="group">
            <input type="email" name="email" id="email" required placeholder="Email">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

			</label>
        </div>
        <div class="group">
            <input type="password" name="pass1" id="pass1" required placeholder="Contraseña">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

			</label>
        </div>
        <div class="group">
            <input type="password" name="pass2" id="pass2" required placeholder="Confirme contraseña">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

			</label>
        </div>
				<div class="col-xs-12 col-sm-12 col-md-12">

					<button type="button" class="btn btn-lg btn-default btn-block kayit-ol-buton" id="registrar">Registrarse</button>
				</div>

        <a class="zaten-hesap-var-link" href="index.php?ncapa=0">¿Tienes una cuenta?, Ingresa.</a>

				<hr><p id="msj2" style="color: red;"></p>
    </form>
</div>

  <div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card" id="contenido2"<?php echo $c2;?>>
        <form id="sifre-hatirlat-form" class="col-lg-12" action="../controlador/recuperacion.php" method="post">
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>


        <div class="group">
            <input type="email" name="correo" id="correo" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
				<i class="material-icons input-ikon">E-mail</i>

			</label>
        </div>

        <a class="zaten-hesap-var-link" href="index.php?ncapa=0">¿Tienes una cuenta?</a>

				<hr><p id="msj3" style="color: red;"></p>
    </form>
</div>


    <script src="js/funciones.js"></script>
    <script src="js/valida_login.js"></script>
</body>
</html>
