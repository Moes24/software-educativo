<?php
    require_once 'conexion.php';
    
    $nombre = $_POST ['nombre'] ;
    $apellido = $_POST['apellido'];
    $grado = $_POST['grado'];
    $codigo = $_POST['codigo'];
    $contraseña = $_POST['contraseña'];
    
    //INSERT---- PARA INSERTAR LOS DATOS A LA BASE DE DATOS
    
    $sql="INSERT INTO usuario VALUES('$nombre','$apellido','$grado','$codigo','$contraseña')";
    $guardar= mysqli_query($db,$sql);
   
   
    if($guardar)
    {
       echo '<script>alert("Registrado")</script> ';
       header('location: login.php');
      
    }
    else
    {
        echo "error"; 
    }
?>