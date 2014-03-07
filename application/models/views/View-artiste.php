<!DOCTYPE html>
<html>
    <head>
        <title>INSCRIPTION</title>
        <meta http-equiv="Content-Type" content="">
    </head>
    <body>
        <div>
            <form method="post">    <!-- Début du formulaire -->      
    <div>
                Nom :
                <input type="text" name="IB_Nom_Personne" id="nom"/>
    </div>
    <div>
                Prénom :
                <input type="text" name="PW_Password_Personne" id="prenom"/>
    </div>
    <div>
                Mot de passe :
                <input type="password" name="PW_Password_Personne" id="motdepasse"/>
    </div>
    <div>
                Date de Naissance :
                <input type="date" name="IB_DateNaiss_Personne" id="datenaissance"/>
    </div>
    <div>
                Email :
                <input type="email" name="IB_Mail_Personne" id="email"/>
    </div>
    <div>
                Adresse :
                <input type="text" name="IB_Adresse_Personne" id="adresse"/>
    </div>
    <div>
                Téléphone :
                <input type="text" name="IB_Adresse_Personne" id="telephone"/>
    </div>
    <div>       <!-- Lliste d�roulante du choix du m�tier -->
       <select name="metier" id="metier"> Métier
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
                    <input type="submit" value="Valider mon inscription"/>
    </div>
            </form> <!-- Fin du formulaire -->
        </div>
    </body>
</html>
