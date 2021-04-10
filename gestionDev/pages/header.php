<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim https://www.creative-tim.com)
 Licensed under MIT https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <?php
session_start();
 ?>
 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../style/bootstrap.min.css" rel="stylesheet" />
    <link href="../style/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../style/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Espace Administratif
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Statestique</p>
                        </a>
                    </li> 
                    <li>
                        <a class="nav-link" href="add-deveoper.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p> ajouter devloppeur</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="liste-developpeurs.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>table devloppeur</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="addtechnos.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ajoutertechnos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="liste-technos.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>tabletechnos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="list-expert-html.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>liste de expert html</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="liste-dev-inco.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>liste dev nv inco </p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="liste-dev-inssufisant.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>liste dev nv insft</p>
                        </a>
                    </li>
                   
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            
                           
                            
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->