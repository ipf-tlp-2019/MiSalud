<?php
require "../conexion/CRUD.php";


if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['password']) && isset($_POST['correo']) ) {
    $nombre= trim($_POST['nombre']);
    $password= trim($_POST['password']);
    $apellido= trim($_POST['apellido']);
    $correo= trim($_POST['correo']);


    
    $validacion= verificarCorreo($correo);
    
    if ($validacion == true) {
        echo false;
    }else{
        $crud= new crud;
        $data= array(
            'NOMBRE_USUARIO'=>$nombre,
            'APELLIDO_USUARIO'=>$apellido,
            'CORREO_USUARIO'=>$correo,
            'PASSWORD_USUARIO'=>$password);
        
        $crud->insert('USUARIO',$data);
        echo true;
    }

    

    

}else{
  echo false;
}



function verificarCorreo($correo){
    $con = new crud;
    
    $sql="SELECT * FROM usuario WHERE CORREO_USUARIO= '" . $correo ."'";
    $sentencia=$con->conexion_db->prepare($sql);  //devuelve un array
    $sentencia->execute(array());
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $sentencia->closeCursor();
  
       
    if( count($resultado)>0)
    { 
       return  true;
    }
    else {
        return false ;
    }
    $con->conexion_db=null;

    }
  


?>
