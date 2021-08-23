
<?php require 'conexion.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>

    <?php include('navbar.php') ?>

    <h1>Inicio de Sesión</h1>
    <form action="login.php" method="post">
      <table>
        <tr>
          <td>Nombre</td>
          <td>
            <label for="nombre"></label>
            <input type="text" name="nombre" required  />
          </td>
        </tr>
        <tr>
          <td>DNI</td>
          <td>
            <label for="dni"></label>
            <input type="text" name="dni" required  />
          </td>
        </tr>
      </table>
    <input type="submit" value="enviar">
    </form>

    <?php include('pie.php')?>

  </body>
</html>