<?php
require "../conexion/Conexion.php";

function consultarUsuario($identificador,  $passUser){
    $con = new Conexion;
    
    $sql="SELECT * FROM usuario WHERE NOMBRE_USUARIO= '" . $identificador ."'AND PASSWORD_USUARIO='".$passUser."'";
    $sentencia=$con->conexion_db->prepare($sql);  //devuelve un array
    $sentencia->execute(array());
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $sentencia->closeCursor();
  
       
    if( count($resultado)>0)
    { 
       return  true;
    }
    else {
        $sql="SELECT * FROM usuario WHERE  CORREO_USUARIO='".$identificador."'  AND PASSWORD_USUARIO='".$passUser."'";
        $sentencia=$con->conexion_db->prepare($sql);  //devuelve un array
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        if( count($resultado)>0)
        {
            return true;
        }else { 
        return false ;
    }
    }
  
      $con->conexion_db=null;

}
?>