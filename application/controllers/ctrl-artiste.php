<?php

if (empty($_POST)== FALSE){
    
  if ($_POST ['Personne_Nom']==''){
        $aError[] = '<p>veuillez renseignez un Nom.</p>';
    }    
   
  if ($_POST ['Personne_Prenom']==''){
        $aError[] = '<p>veuillez renseignez un Prénom.</p>';
    }
  if ($_POST ['Personne_Password']==''){
        $aError[] = '<p>veuillez renseignez un mot de passe.</p>';
    }
    
  if (strlen($_POST ['Personne_Password']) < 6 && strlen($_POST ['Personne_Password']) > 45){
        $aError[] = '<p>veuillez renseignez un mot de passe supérieur à 6 caractères et inferieur à 45 caractères.</p>';  
    }

if (isset($aError )== false) {
    echo'inscription ok';

//verifie si l'user a bien valider l'inscription
    if(isset($_POST['BT_Valider_Inscription']) == true ){

//fonction démarrager bdd      
        $bdd = My_Db::getDb();
//fonction insertion        
       $insertpersonne  =   $bdd->prepare(
               'INSERT INTO personne ('
               . 'Personne_Nom, '
               . 'Personne_Prenom, '
               . 'Personne_DateNaiss, '
               . 'Personne_Mail, '
               . 'Personne_Adresse, '
               . 'Personne_Metier, '
               . 'Personne_Telephone, '
               . 'Personne_Password, '
               . 'Personne_SiteWeb, '
               . ') '
               
               . 'VALUES('
               . ':Personne_Nom, '
               . ':Personne_Prenom, '
               . ':Personne_DateNaiss, '
               . ':Personne_Mail, '
               . ':Personne_Adresse, '
               . ':Personne_Metier, '
               . ':Personne_Telephone, '
               . ':Personne_Password, '
               . ':Personne_SiteWeb, '
               );
       
       
       
       $insertpersonne-> execute(array(           
         'Personne_Nom' => $_POST['IB_Nom_Personne'],
         'Personne_Prenom' => $_POST['IB_Prenom_Personne'],
         'Personne_DateNaiss' => $_POST['IB_DateNaiss_Personne'],  
         'Personne_Mail' => $_POST['IB_Mail_Personne'],
         'Personne_Adresse' => $_POST['IB_Adresse_Personne'],
         'Personne_Metier' => $_POST['IB_Metier_Personne'],  
         'Personne_Telephone' =>  $_POST['IB_Telephone_Personne'], 
         'Personne_Password' =>  $_POST['IB_Password_Personne'],   
         'Personne_SiteWeb' =>  $_POST['IB_Password_Personne'],
           
    ));

                
    };
}
}
?>