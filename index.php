<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-icon.png">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>

        MiSalud
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->

    <link rel="stylesheet" href="css/style.css">
    <link href="./css/material-kit.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>

<body class="index-page sidebar-collapse">

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="navbar-translate">
                <a  id="btnInicio" class="navbar-brand"><i class="fas fa-laptop-medical" style="font-size:36px;"></i> &nbsp;<span>Mi </span><b>Salud</b> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav ml-auto">
               
                    <div class="dropdown-divider"></div>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">account_circle</i> 
                            <?php if($_SESSION['userName']<>""){
						echo $_SESSION['userName'];
   
					}else{
						header('location: ./login.html');
                    } ?>
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                           
                            <a  class="dropdown-item"  id="date_personal">
                                <i class="material-icons">content_paste</i> Mis Datos Personales
                            </a>
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">forum</i> Contactanos
                            </a>
                            <a class="dropdown-item">
                            <button class="btn btn-danger form-control" id="btnCloseSession">Cerrar sesión</button>
                            </a>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="content index-page sidebar-collapse" id="contenido">
      
    </div>
    </div>
    </div>


<script>


$(document).ready(function(){

    $("#contenido").load("modulos/html/Inicio/Inicio.html")
    
    $("#estudiosRecientes").click(function(){
       $("#contenido").load("modulos/html/estudiosRecientes/estudiosRecientes.html")
        
    })

    $("#btnmedicoAsociado").click(function(){
       $("#contenido").load("modulos/php/medicosAsociados/medicosAsociados.php")
        
    })
     
    $("#btnInicio").click(function(){
       $("#contenido").load("modulos/html/Inicio/Inicio.html")
        
    })
     
    
    $("#btnInicio").click(function(){
       $("#contenido").load("modulos/html/Inicio/Inicio.html")
        
    })
    $("#btnAtras").click(function() {

        $("#contenido").load("modulos/html/Inicio/Inicio.html")

        }) 

     

    $("#date_personal").click(function(){
        $("#contenido").load("modulos/php/datosPersonales/datosPersonales.php")
    });

    $("#btnCloseSession").click(function(){
        <?php   session_destroy() ?>
        window.location.href = "login.html";
    });
})



</script>
    <script src="js/material-kit.js?v=2.0.5" type="text/javascript"></script>


</body>

</html