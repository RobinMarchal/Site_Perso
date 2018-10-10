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
        <link rel="icon" href="">  
    </head>
    <body class="connect">
        <div class="container">
            <div class="row"> 
                <div id="login" class="login">

                    <form class="z-depth-4" action="" method="post">
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
                                <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- script -->
        <script src="<?php echo base_url(); ?>assets/JQuery/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/JS/materialize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/JS/myFunctions.js"></script>
    </body>
</html>