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
  <title>Iniciar Sesión</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar Sesión </h2>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/loge.jpeg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form  action="loguear.php" method="POST" id="formulario"  name="formulario" class="formulario">
      <input type="text" class="fadeIn second" name="codigo" placeholder="login">
      <input type="text" class="fadeIn third" name="contraseña" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrate</a>
    </div>

  </div>
</div>
</body>
</html>

