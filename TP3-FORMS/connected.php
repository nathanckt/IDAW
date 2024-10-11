<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMMMMMMMMMM</title>
</head>
<body>
    
    <?php
    // on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );
        
        $login = "anonymous";
        $errorText = "";
        $successfullyLogged = false;
        
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $tryLogin=$_POST['login'];
            $tryPwd=$_POST['password'];
            
            // si login existe et password correspond
            if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
                $successfullyLogged = true;
                $login = $tryLogin;
            } else
            $errorText = "Erreur de login/password";
            
        } else
        $errorText = "Merci d'utiliser le formulaire de login";
        
        if(!$successfullyLogged) {
            echo $errorText;
        } else {
            echo "<h1>Bienvenu ".$login."</h1>";
        }
        ?>

<!-- La méthode GET est moins sécurisé car les données sont affichés dans l'url et dans le cache du navigateur donc pour des données sensibles comme un mot de passe c'est pas la meilleure solution.
En revanche, sur l'envoi des données vers le serveur, à pars la taille des fichiers, il n'y a pas grande différence. -->
</body>
</html>