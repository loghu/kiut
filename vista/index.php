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
    <!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/index.css">
	<LINK rel="Shortcut Icon" href="css/image/icono.ico">
	<style media="screen">
				body{background-image: url(css/image/ingrediente.jpg)}
</style>
	<!-- Llamando el material fuera de nosotros, los archivos de fuentes Iconos
	   <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  </head>
  <!--<body onload = "<?php echo $ci;?>">-->
  <body>
<!-- ***************************Capa iniciar secion ************************-->
<div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card container" id="contenido0"<?php echo $c0;?>>
<!--Login (entrada) Formulario Página -->
    <form name="login" id="login-form" class="col-lg-12" method="POST" action="../controlador/logeo.php">
     <!-- Logo -->
        <div class="col-lg-12 logo-kapsul">
        	<!--<img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />-->
			<img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>
     <!-- fin de logo -->
        <div style="clear:both;"></div>
        <!-- La entrada Entrar Nombre de Usuario-->
         <div class="group">
            <input type="text" name="user" id="user" placeholder="Usuario">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!-- <span class="span-input">Usuario</span> -->
			</label>
        </div>
        <!-- #El extremo de entrada Entrar Nombre de Usuario -->


        <!-- La entrada de sesión Contraseña-->
        <div class="group">
            <input type="password" name="password" id="password" placeholder="Password">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!-- <span class="span-input">Contraseña</span> -->
			</label>
        </div>
        <!-- La contraseña de entrada Fin Registro-->

        <!-- Iniciar Button -->
				<div class="col-xs-12 col-sm-12 col-md-12">
				<!--     <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">-->
				<button type="submit" class="btn btn-lg btn-default btn-block giris-yap-buton" id="envia">Iniciar sesión</button>
					</div>
			<!-- #Iniciar botón Fin -->

        <!-- ¿Ha olvidado su contraseña?  -->
        <div class="forgot-and-create tab-menu">
            <!--<a class="sifre-hatirlat-link" href="index.php?ncapa=2">¿Ha olvidado su contraseña?</a>-->
            <a class="hesap-olustur-link" href="index.php?ncapa=1">Necesitas registrarte? Registrate Aquí!</a>
        </div><!-- ¿Ha olvidado su contraseña? Registrarse Enlaces y Fin -->
		<hr><p id="msj" style="color: red;"></p>
    </form> <!-- Login (entrada) Formulario de la página Fin -->
  </div>
<!-- ***************************Fin capa iniciar sesion ************************-->





<!-- *************************** Capa registrate ************************-->
  <div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card" id="contenido1"<?php echo $c1;?>>
        <form id="kayit-form" class="col-lg-12"   method="POST" action="../controlador/registro.php">
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

		<!-- El formulario de registro de entrada de nombre de usuario-->
        <div class="group">
            <input type="text" name="usuario" id="usuario" required placeholder="Usuario">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!--<span class="span-input">Usuario</span>-->
			</label>
        </div><!-- #El extremo de entrada del usuario Formulario de Registro de Nombre -->

        <!--El formulario de registro de entrada de correo electrónico -->

        <div class="group">
            <input type="email" name="email" id="email" required placeholder="Email">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!--<span class="span-input">E-Mail</span>-->
			</label>
        </div><!--# La entrada de correo electrónico de registro Formulario de finalización -->

        <!-- El formulario de registro de entrada de contraseña-->
        <div class="group">
            <input type="password" name="pass1" id="pass1" required placeholder="Contraseña">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!--<span class="span-input">Contraseña</span>-->
			</label>
        </div><!--# La introducción de contraseña Formulario de Registro de Terminación -->

        <!-- El formulario de contraseña-Re-Registro de entrada -->
        <div class="group">
            <input type="password" name="pass2" id="pass2" required placeholder="Confirme contraseña">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>

				<!--<span class="span-input">Repetir contraseña</span>-->
			</label>
        </div><!-- #La entrada de la clave de registro Re-Form-End -->

				<!-- Iniciar Button -->
				<div class="col-xs-12 col-sm-12 col-md-12">
				<!--     <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">-->
					<button type="button" class="btn btn-lg btn-default btn-block kayit-ol-buton" id="registrar">Registrarse</button>
				</div>
			<!-- #Iniciar botón Fin -->

        <!-- #Register botón Fin -->

        <!-- Ya hay vinculación de cuentas -->
        <a class="zaten-hesap-var-link" href="index.php?ncapa=0">¿Tienes una cuenta?, Ingresa.</a>
        <!--# Ya hay vinculación de cuentas Fin -->
				<hr><p id="msj2" style="color: red;"></p>
    </form><!-- #Formulario de inscripción caducidad de la páginas -->
</div>
<!-- ***************************Fin de capa registrate************************-->



<!-- ***************************Capa recuperacion de cuenta ************************-->
  <div class="col-lg-4 col-md-7 col-sm-6 col-xs-12 login-card" id="contenido2"<?php echo $c2;?>>
        <form id="sifre-hatirlat-form" class="col-lg-12" action="../controlador/recuperacion.php" method="post">
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="css/image/logo4.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <!-- La introducción de contraseña Correo electrónico de recordatorio -->
        <div class="group">
            <input type="email" name="correo" id="correo" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>
				<i class="material-icons input-ikon">E-mail</i>
				<!--<span class="span-input">E-Mail</span>-->
			</label>
        </div><!-- #La entrada de correo electrónico Contraseña Recordatorio de vencimiento -->

        <!-- Ya hay vinculación de cuentas -->
        <a class="zaten-hesap-var-link" href="index.php?ncapa=0">¿Tienes una cuenta?</a>
        <!-- #Ya hay vinculación de cuentas Fin -->
				<hr><p id="msj3" style="color: red;"></p>
    </form><!-- #Enviar contraseña Formulario de caducidad -->
</div>
<!-- ***************************Fin de capa recuperacion de cuenta ************************-->

    <script src="js/funciones.js"></script>
    <script src="js/valida_login.js"></script>
</body>
</html>
