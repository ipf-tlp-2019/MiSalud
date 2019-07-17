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

</head>

<body class="index-page sidebar-collapse ">

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand"><i class="fas fa-laptop-medical" style="font-size:36px;"></i> &nbsp;<span>Mi </span><b>Salud</b> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav ml-auto">
                <li class="active nav-item">
                        <a class="nav-link"><i class="material-icons">account_circle</i>
                	<?php if($_SESSION['userName']<>""){
						echo $_SESSION['userName'];
   
					}else{
						header('location: ./login.html');
                    } ?>
                    </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class=" nav-item">
                        <a class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Mis Datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contactanos</a>
                    </li>
                    <li class="nav-item">
                       <button class="btn btn-danger" id="btnCloseSession">Cerrar sesión</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="content" id="contenido">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                        <span class="material-icons" style='font-size:36px'>restore</span>
                        </div>
                        <h3><a >Estudios Recientes</a></h3>
                        <p>Visualizar los últimos estudios realizados</p>
                        
                    </div>
                </div>
                <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                            <span class="fas fa-stethoscope" style="font-size:36px;"></span>
                        </div>
                        <h3><a href="#">Médicos Asociados</a></h3>
                        <p>Administre qué doctor podrá manejar y utilizar su historial médico</p>
                    </div>
                </div>
              

            </div>

            <div class="col-md-4">

                <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                        <span class="fas fa-notes-medical" style="font-size:36px;"></span>                           
                        </div>
                        <h3><a href="#">Historial Clínico</a></h3>
                        <p>Ver información medica</p>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
            <div class="department-wrap p-4 ftco-animate">
                    <div class="text p-2 text-center">
                        <div class="icon">
                        <span class="fa fa-ambulance" style="font-size:36px;"></span>
                        </div>
                        <h3><a href="">Centros Médicos</a></h3>
                        <p>Encuentre el centro médico más cercanos</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    </div>
    </div>

<script>
    $("#btnCloseSession").click(function(){
        <?php
        session_destroy() 
       ?>
        window.location.href = "login.html";

    })
</script>
    <script src="js/material-kit.js?v=2.0.5" type="text/javascript"></script>

</body>

</html