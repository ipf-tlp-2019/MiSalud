<?php
require "../conexion/Conexion.php";

function consultarUsuario($correo,  $passUser){
    $con = new Conexion;
    
        $sql="INSERT * FROM usuario WHERE  CORREO_USUARIO='".$correo."'  AND PASSWORD_USUARIO='".$passUser."'";
        $sentencia=$con->conexion_db->prepare($sql);  //devuelve un array
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        if( count($resultado)>0)
        {
            return $resultado[0]["NOMBRE_USUARIO"] . " " .$resultado[0]["APELLIDO_USUARIO"];
        }else { 
        return false ;
    }
  
      $con->conexion_db=null;
}
?>