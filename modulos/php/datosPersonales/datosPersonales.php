<?php

require "../conexion/CRUD.php";
require "../../../lib/template.php";
$t = new Template('../../html/datosPersonales/');
$pdo= new crud;

//Archivos comunes
$t->set_file(array(
    "datosPersonales" => "datosPersonales.html",
   
));

                   

$t->set_var('nombre',"Ale");
$t->set_var('apellido',"el mas kpito");



$t->pparse("OUT", "datosPersonales");
$pdo->conexion_db=null;	
?>