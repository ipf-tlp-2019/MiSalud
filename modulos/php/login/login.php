<?php
require "./consultasUsuarios.php";

if (isset($_POST['identificador']) && isset($_POST['password'])) {
      $identificador= trim($_POST['identificador']);
      $password= trim($_POST['password']);
      
      $validacion= consultarUsuario($identificador, $password);
    
      echo $validacion;

}else{
    echo false;
}
   

session_start();
$_SESSION['userName']=$identificador; 

?>