<!DOCTYPE html>
<html>
    <head>
        <title>INSCRIPTION</title>
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
            INSCRIPTION
    </div>
                <br/>   <!-- Saut de ligne pour aérer-->   
    <div>
                <label for="nom">Nom :</label>
                <input type="text" name="IB_Nom_Personne" id="nom"/>
    </div>
    <div>
                <label for="prenom">Prénom :</label>
                <input type="text" name="IB_Prenom_Personne" id="prenom"/>
    </div>
    <div>
                <label for="motdepasse">Mot de Passe :</label>
                <input type="password" name="PW_Password_Personne" id="motdepasse"/>
    </div>
    <div>
                <label for="datenaissance">Date de Naissance :</label>
                <input type="date" name="IB_DateNaiss_Personne" id="datenaissance"/>
    </div>
    <div>
                <label for="email">Email :</label>
                <input type="email" name="IB_Mail_Personne" id="email"/>
    </div>
    <div>
                <label for="adresse">Adresse :</label> :
                <input type="text" name="IB_Adresse_Personne" id="adresse"/>
    </div>
    <div>
                <label for="telephone">Téléphone :</label>
                <input type="text" name="IB_Telephone_Personne" id="telephone"/>
    </div>
    <div>  <!-- Liste déroulante du choix du métier -->
       Métier
       <select name="metier" id="metier">
           <option value="Comedien">Comédien</option>
           <option value="Acteur">Acteur</option>
           <option value="Figurant">Figurant</option>
           <option value="Accesoiriste">Accesoiriste</option>
           <option value="Ingeson">Ingénieur Son</option>
           <option value="IngeLum">Ingénieur Lumiére</option>
           <option value="Cadreur">Cadreur</option>
       </select>
    </div>
                
    <div>
                    <input type="submit" name ="BT_Valider_Inscription"value="Valider mon inscription"/>
    </div>         
                <div id="retourinscri">
                <a href="View-index.php">Retour</a>
                </div>
            </form><!-- Fin du formulaire -->

        </div>
    </body>
</html>
