<?php
$codigo=$_POST["codigo"];
$contraseña=$_POST["contraseña"];

require_once 'conexion.php';

if (isset($_POST)) {



$sql="SELECT * FROM usuario WHERE codigo='{$codigo}' AND contraseña='{$contraseña}'";
$login= mysqli_query($db,$sql);

if($login && mysqli_num_rows($login)==1){

  //echo "entroooooooooooooooooooooooooooooooooooooooooooooooooo";

  $usua=mysqli_fetch_assoc($login);
  //var_dump($usua);

  $_SESSION['usua']=$usua;
  header('Location: indexusua.php');
 // header('Location: usuario/sesionusuario.php');
}
else
{
  //echo "oooooooooooooooooooooooooooooooooooooooooooooooooo";
  //$_SEESION('Error_login')="Login Incorrecto";
  header('Location: registro.php');
}
  
}

?>
