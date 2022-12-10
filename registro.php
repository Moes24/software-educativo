<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="images/loge.jpeg">
  <title>Iniciar Sesión</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Registrate </h2>
    <!-- Icon -->
    <div class="fadeIn first">
    <img src="images/loge.jpeg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="regis.php" method="POST" id="formulario"  name="formulario" class="formulario">
      <input type="text" class="fadeIn second" name="nombre" placeholder="nombre">
      <input type="text" class="fadeIn third" name="apellido" placeholder="apeliido">
      <input type="text" class="fadeIn third" name="grado" placeholder="grado">
      <input type="text" class="fadeIn third" name="codigo" placeholder="codigo">
      <input type="text" class="fadeIn third" name="contraseña" placeholder="contraseña">
      <input type="submit" class="fadeIn fourth" value="Registrar" >
    </form>


    <div id="formFooter">
      <a class="underlineHover" href="login.php">Iniciar Sesión</a>
    </div>

  </div>
</div>
</body>
</html>