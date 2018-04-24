<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" media="screen" title="no title">
    <title>login</title>
  </head>
  <body>
    <div class="contenedor">
      <form class="" action="login.php" method="post">
        Bienvenido <br>
        <input type="email" name="mail" class="caja" placeholder="Correo Electronico" required="true"><br>
        <input type="password" name="pas" class="caja" value="" placeholder="Contraseña" required="true"><br>
        <input type="submit" name="act" value="Enviar" class="boton"><br>
        <input type="submit" name="act" value="registar" class="boton"><br>
      </form>
    </div>
  </body>
</html>
<?php
if (isset($_POST['mail']) && isset($_POST['pas'])) {
  $correo=$_POST['mail'];
  $contra=$_POST['pas'];
  aut ($correo, $contra);
}
function aut($correo, $contra){
  include ('conexion.php');
  $result = mysqli_query($con,"SELECT * FROM usuarios WHERE password='$contra' and usuario='$correo'");
  if ($result->num_rows>=1) {
    header("Location: menu.php");
  }else {
    echo "<script> alert('datos incorrectos. falta registrarte');</script>";
  }
}
?>
