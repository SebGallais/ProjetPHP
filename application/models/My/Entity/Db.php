<?php

class My_Db
{
       static function getDb()
        {
            $dsn = 'mysql:host=192.168.214.13dbname=megacasting'  ;
            $dbUser = 'root';
            $dbPass = '';
            $oDb = new PDO($dsn, $dbUser, $dbPass );
            
            return  $oDb;
        }

}
?>
