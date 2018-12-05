<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pedidos </title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <LINK rel="Shortcut Icon" href="css/image/icono.ico">
    <style media="screen">


      body{
        background: #FFFF00;
        background-image: url(css/image/ingrediente.jpg)
      }
      .container{
        margin-top: 4%;
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
        width: 250px;
        font-size: 20px;
        border-radius: 20px;
        margin-bottom: 0.5%;
        border-width: medium;
        border-color: black;
      /*  background: #ffffff;*/

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
        font-size: 30Px;
      }
      .hola{
        text-align: right;
        margin-top: 10%;
      }
    </style>
  </head>
  <body>
    <script src="http://code.jquery.com/jquery.js"></script>
		 <script src="js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default" role="navigation">
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Menu</a></li>
          <li><a href="venta.php">Venta</a></li>
          <li><a href="promo.php">Promociones</a></li>
      </div>
    </nav>

   <div class="container">
      <form class="row" >
        <label> PEDIDO</label><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Pizaa" ><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Tamaño"><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Hamburguesa"><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Alitas"><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Cantidad de piezas"><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Bebida"><br>
        <input type="text" name="pas" class="caja" value="" placeholder="Tamaño"><br>
        <input type="submit"  class="btn btn-default"name="apagar" value="Aceptar"><br>
      </form>
    </div>-->
  <!--  <div class="hola">
      <form method="post" action="home.php">
        <input type="submit" id="prender2" class="btn btn-primary"name="azul" value="Regresar"><br>
      </form>
    </div>-->


  </body>
</html>
