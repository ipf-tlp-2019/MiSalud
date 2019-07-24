<?php
require "./consultasUsuarios.php";

if (isset($_POST['correo']) && isset($_POST['password'])) {
      $correo= trim($_POST['correo']);
      $password= trim($_POST['password']);
      
      $validacion= consultarUsuario($correo, $password); // si existe usuario me devuelve el nombre y apellido
      // si no existe devuelve

    
      echo $validacion; 

}else{
    echo false;
}
session_start();
   
$_SESSION['userName']=$validacion; 



?>