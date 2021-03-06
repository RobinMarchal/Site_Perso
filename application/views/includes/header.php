<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?php echo $description; ?>">
        <title content="Marchal Robin" itemprop="name"><?php echo $title ?></title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700normal,700italic|Source+Sans+Pro:400,400italic,700normal,700italic" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">  
        
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127488021-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-127488021-1');
        </script>
    </head>
<body>
    <header id="header" >
        <!-- Navbar -->
        <div class="navbar-fixed" >
            <nav  class="" role="navigation">
                <div class="nav-wrapper container">
                    <div class="nav-header">
                        <a data-activates="slide-out" href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
                    </div>

                    <ul id="navbar" class="right hide-on-med-and-down nav-scroll">
                        <li><a href="#top" class="links">Home</a></li>
                        <li><a href="#presentation" class="links">Présentation</a></li>
                        <li><a href="#formation" class="links">Formations</a></li>
                        <li><a href="#skill" class="links">Compétences</a></li>
                        <li><a href="#waking" class="links">Veille</a></li>
                        <li><a href="#experience" class="links">Expériences</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Toggle Navigation -->
        <ul id="mobile-links" class="sidenav">
            <li class="mobile-nav-logo">
                <div class="brand-logo">Marchal Robin</div>
                <div class="divider"></div>
            </li>
            <li><a href="#top" >Home</a></li>
            <li><a href="#presentation" >Présentation</a></li>
            <li><a href="#formation" >Formations</a></li>
            <li><a href="#skill" >Compétences</a></li>
            <li><a href="#waking" >Veille</a></li>
            <li><a href="#experience" >Expériences</a></li>
        </ul>
    </header> <!-- End header -->