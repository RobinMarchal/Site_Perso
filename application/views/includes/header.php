<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?php echo $description; ?>">
        <title><?php echo $title ?></title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700normal,700italic|Source+Sans+Pro:400,400italic,700normal,700italic" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="icon" href="assets/img/logo.ico">  
        
    </head>
<body>
    <div id="header" class="navbar-fixed">
        <!-- Navbar -->
        <nav  class="" role="navigation">
            <div class="nav-wrapper container">
                <div class="nav-header">
                    <a data-activates="slide-out" href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
                </div>

                <ul id="id-nav" class="right hide-on-med-and-down">
                    <li class="active"><a href="#" class="links">Home</a></li>
                    <li><a href="#" class="links">Présentation</a></li>
                    <li><a href="#" class="links">Formations</a></li>
                    <li><a href="#" class="links">Compétences</a></li>
                    <li><a href="#" class="links">Veille</a></li>
                    <li><a href="#" class="links">Expériences</a></li>
                </ul>
            </div>
        </nav>
        <!-- Toggle Navigation -->
        <ul id="mobile-links" class="sidenav">
            <li class="mobile-nav-logo">
                <div class="brand-logo">moi</div>
                <div class="divider"></div>
            </li>
            <li><a href="#" >Home</a></li>
            <li><a href="#" >Présentation</a></li>
            <li><a href="#" >Formations</a></li>
            <li><a href="#" >Compétences</a></li>
            <li><a href="#" >Veille</a></li>
            <li><a href="#" >Expériences</a></li>
        </ul>
    </div> <!-- End header -->