<?php
require "../conexion/conexionBD.php";

$sql="SELECT * FROM medico_asociado";

$sentencia=$conn->prepare($sql);  //devuelve un array
$sentencia->execute(array());
$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
$sentencia->closeCursor();
/*
if( count($resultado)>0)
{
    return $resultado[0]["NOMBRE_USUARIO"] . " " .$resultado[0]["APELLIDO_USUARIO"];
}else { 
return false ;
}
*/


$conn=null;

echo "<div class='row'>
<button class='btn btn-primary' id='btnAtras'>
    <i class='material-icons' >arrow_back</i> Volver
</button>
</div>
<table class='table table-bordered'><thead style='background-color:#9c27b0; color:#fff'>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>MATRICULA NRO</th>
        <th>ESPECIALIDAD</th>
</thead>

    <tbody>

    " ;

    foreach ($resultado as $clave => $valor) {
        echo "<tr><td scope='row'>";
        echo $valor['NOMBRE_MEDICO'] . " </td>
        
        <td scope='row'>";
        echo $valor['APELLIDO_MEDICO'] . " </td>

        <td scope='row'>";
        echo $valor['MATRICULA_MEDICO'] . " </td>
        
        <td scope='row'>";
        echo $valor['ESPECIALIDAD_MEDICO'] . " </td></tr>";
        
      }
echo "


    </tbody>
</table>


<script>
    $('#btnAtras').click(function() {

        $('#contenido').load('modulos/html/Inicio/Inicio.html')

    })
</script>";

 
 ?>