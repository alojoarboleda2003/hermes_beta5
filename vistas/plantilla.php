<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hermes ALOJO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="vistas/dist/js/demo.js"></script> -->

</head>

<body class="hold-transition sidebar-mini login-page">



</div>

<?php

    if (isset($_SESSION["iniciarsesion"]) && $_SESSION["iniciarsesion"] == "ok") {
        echo '<div class="wrapper">';
            
        

        include "modulos/cabezotetmp.php";
        include "modulos/menu.php";
    
    
        

        if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||
                $_GET["ruta"] == "permisos" ||
                $_GET["ruta"] == "inventario" ||
                $_GET["ruta"] == "recepcion" ||
                $_GET["ruta"] == "reserva" ||
                $_GET["ruta"] == "inmediata" ||
                $_GET["ruta"] == "autorizaciones" ||
                $_GET["ruta"] == "solicitud" ||
                $_GET["ruta"] == "devoluciones" ||
                $_GET["ruta"] == "salidas" ||
                $_GET["ruta"] == "reportes" ||
                $_GET["ruta"] == "salir") {
                
                include "modulos/".$_GET["ruta"].".php";
            } else {
                include "modulos/error404.php";
            }
        }
        include "modulos/footer.php";
        echo '</div>';

    } else {
        include "modulos/login.php";
    }

    





