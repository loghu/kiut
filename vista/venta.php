<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <LINK rel="Shortcut Icon" href="css/image/icono.ico">
      <style media="screen">
      body{
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
            <li><a href="home.php">Menu</a></li>
            <li><a href="venta.php">Venta</a></li>
            <li><a href="pedido.php">ordenar</a></li>
            <li><a href="promocion.php">Promociones</a></li>
        </div>
    </nav>

    <div class="panel panel-danger">
      <div class="panel-heading">Observa nuestras promociones</div>
      <div class="panel-body">
    Productos
      <div class="panel panel-success">
      <div class="panel-heading">Productos</div>
      <div class="panel-body">
        Tabla de productos<br>
        <table class="table">
      <thead class="thead-dark">
        <tr>
    			<th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <th scope="row">1</th>
          <td>pizza</td>
          <td>2</td>
          <td>$ 150</td>
          <td>$300</td>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <th scope="row">2</th>
          <td>Alitas</td>
          <td>3</td>
          <td>$ 65</td>
          <td>$205</td>
        </tr>
      </tbody>
    </table>
        <button type="button" class="btn btn-success">Aceptar</button>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>
