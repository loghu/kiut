<?php
session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pedidos </title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
		 <script src="js/bootstrap.min.js"></script>
    <LINK rel="Shortcut Icon" href="css/image/icono.ico">
    <style media="screen">
      body{
				background: #000000;
        /*background-image: url(../imagenes/fondo2.jpg);*/

      }
      .container{
        margin-top: 0%;
        color:#0078e7;
    		/*background: #FFFF00;*/
    		text-align: center;
        border-width: medium;
        border-color: white;
      }
      .caja{
        text-align: center;
        color:black;
        height: 40px;
        width: 400px;
        font-size: 20px;
        border-radius: 20px;
        margin-bottom: 0.5%;
        border-width: medium;
        border-color: black;
      /*  background: #ffffff;*/

      }
      .form-control{
        text-align: center;
        color:black;
        height: 40px;
        width: 250px;
        font-size: 20px;
        border-radius: 20px;
        margin-bottom: 0.5%;
        border-width: medium;
        border-color: black;
      }
      .btn{
        color:black;
        background: #ffffff;
        height: 40px;
        width: 200px;
        font-size: 20px;
        border-radius: 20px;
        margin-bottom: 0.5%;
        border-width: medium;
      }
      label{
        font-size: 30px;
        color: white;
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
          <li><a href="home.php">Menu</a></li>
          <li><a href="venta.php">Venta</a></li>
          <li><a href="pedido.php">ordenar</a></li>
          <li><a href="promocion.php">Promociones</a></li>
      </div>
    </nav>
<div class="hola">
  <label>Disculpe puedo tomar su orden :P</label>
</div>

   <div class="container">
      <form class="row" method="POST" action="../controlador/orden.php" >
        <h1>PEDIDO</h1><br>
        <input type="text" name="pi" class="caja" value="" id="pi" placeholder="Pizza" maxlength="15"  ><br>
        <select class="caja" name="ta" type="text" id="ta" formControlName="tipo" >
          <option value="niguna" type="text">Tamaño de la pizza...</option>
          <option value="Personal"type="text"> Personal</option>
          <option value="Mediana"type="text"> Mediana</option>
          <option value="Grande"type="text">Grande</option>
          <option value="Familiar"type="text">Familiar</option>
        </select><br>
        <input type="text" name="hg" class="caja" value="" id="hg" placeholder="Hamburguesa" maxlength="15"><br>
        <input type="text" name="a" class="caja" value="" id="a" placeholder="Alitas" maxlength="15"><br>
        <select class="caja" name="ca" type="number" id="ca" formControlName="tipo" >
          <option value="Sin alitas">Cantidad de alitas...</option>
          <option value="6"> 6 Piezas</option>
          <option value="12"> 12 Piezas</option>
          <option value="24">24 Piezas</option>
        </select><br>
        <select class="caja" name="b" type="text" id="b" formControlName="tipo" >
          <option value="Sin bedida">Bebida...</option>
          <option value="Pepsi">Pepsi</option>
          <option value="Coca-cola">Coca-cola</option>
          <option value="Manzanita">Manzanita</option>
          <option value="Fresca">Fresca</option>
        </select><br>
        <select class="caja" name="tam" type="text" id="tam" formControlName="tipo" >
          <option value="Sin bebida">Tamaño de la bebida...</option>
          <option value="600 ml"> 600 ml</option>
          <option value="1.5 litros"> 1.5 litros</option>
          <option value="2.5 litros">2.5 litros</option>
          <option value="3 litros">3 litros</option>
        </select><br>
      <!--  <select class="caja" type="number" id="tipo" formControlName="tipo" >
          <option value="">Promocion del dia...</option>
        </select><br>-->
        <form action="home.php">
					<SCRIPT LANGUAGE="JavaScript">
						 function tu () {
							 alert ("Esta seguro de su pedido");
											}
									</SCRIPT>
        <input type="submit"  class="btn btn-default"name="apagar" value="Aceptar" onclick="tu()"><br>
      </form>
			<form action="home.php">
				<SCRIPT LANGUAGE="JavaScript">
					 function tia () {
						 alert ("Esta seguro de cancelar");
										}
								</SCRIPT>
			<input type="submit"  class="btn btn-default"name="apagar" value="cancelar" onclick="tia()"><br>
		</form>
      </form>
    </div>-->
  <!--  <div class="hola">
      <form method="post" action="home.php">
        <input type="submit" id="prender2" class="btn btn-primary"name="azul" value="Regresar"><br>
      </form>
    </div>-->


  </body>
</html>

<?php
}else{		echo "<script type='text/javascript'>
                alert('Debe iniciar sesión');
                window.location.href='../vista/index.php';
            </script>";
          }
           ?>
