<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $title ?></title>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">  
    </head>
    <body class="connect">
        <div class="container">
            <div class="row"> 
                <div id="login" class="login">

                    <form class="z-depth-4" action="" method="post">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate">
                                    <label for="username">Nom Utilisateur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s7">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                                </div>

                                <div class="col s3 ">
                                    <a class="waves-effect waves-light btn" href="<?php echo base_url();?>" title="Retour">Retour</a>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/myFunctions.js"></script>
    </body>
</html>