<!DOCTYPE html>
<html>
    <head>
        <title>CONNECTION</title>
        <link rel="stylesheet" type="text/css" href="../../../public/style/style.css"/> <!-- Ajout de la feuille de style -->
        <link rel="icon" type="image/png" href="favicon.ico" /> <!-- Mis en place du favicon -->
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="header">
            <!--HEADER ICI-->  
            <a href="View-connection.php">Se connecter</a> / <a href="View-inscription.php">Créer un compte</a>
        </div>
        <div>
            <form method="post">    <!-- Début du formulaire (avec l'option du label)-->  
    <div id="inscription">
            CONNECTION
    </div>
                <br/>   <!-- Saut de ligne pour aérer-->   
        <div>
                <label for="email">Email :</label>
                <input type="email" name="IB_Mail_Personne" id="email"/>
    </div>  
    <div>
                <label for="motdepasse">Mot de Passe :</label>
                <input type="password" name="PW_Password_Personne" id="motdepasse"/>
    </div>
          
    <div>
                <input type="submit" value="Connection"/>
    </div>         
    <div id="retourinscri">
                <a href="View-index.php">Retour</a>
    </div>
            </form><!-- Fin du formulaire -->

        </div>
    </body>
</html>
