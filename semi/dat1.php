<?php require 'conexion.php';
  require 'navbar.php';
//resivimos los datos de regis1
  $nombre    = $_POST["nombre"];
  $apellido  = $_POST["apellido"];
  $mail      = $_POST["mail"];
  $telefono  = $_POST["telefono"];
  $dni       = $_POST["dni"];
  $direccion = $_POST["direccion"];
  $inte      = $_POST["inte"];

//insertamos los datos obtenidos
$inserto = "INSERT INTO usu1 (nombre, apellido, mail, telefono, dni, direccion,inte)
                      VALUES ('$nombre','$apellido','$mail','$telefono','$dni','$direccion','$inte')";

$veri_usu = mysqli_query($conexion, "SELECT * FROM usu1 WHERE dni = '$dni'");
if (mysqli_num_rows($veri_usu) > 0){
echo "el dni ya existe";
exit;


}

//ejecutamos la axion inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo "error al registrar";
}else {
  echo "registrado correcto";
}
mysqli_close($conexion);
?>