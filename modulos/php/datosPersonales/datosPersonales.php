<?php

require "../conexion/CRUD.php";
require "../../../lib/template.php";
$t = new Template('../../html/datosPersonales/');
$pdo= new crud;

//Archivos comunes
$t->set_file(array(
    "datosPersonales" => "datosPersonales.html",
   
));

                   

$t->set_var('nombre',"");
$t->set_var('apellido',"");
$t->set_var('correo',"");
$t->set_var('fecha_nac',"");
$t->set_var('telefono',"");
$t->set_var('domicilio',"");
$t->set_var('departamento',"");
$t->set_var('localidad',"");
$t->set_var('provincia',"");
$t->set_var('grupo_s',"");
$t->set_var('alergias',"");






$t->pparse("OUT", "datosPersonales");
$pdo->conexion_db=null;	
?>