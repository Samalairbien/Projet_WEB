<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        
           Pour ceux qui doivent spécifier le port ex : 
           $bdd = new PDO("mysql:host=CHANGER_HOST_ICI;dbname=CHANGER_DB_NAME;charset=utf8;port=3306", "CHANGER_LOGIN", "CHANGER_PASS");
           
         */
    try 
    {
        $bdd = new PDO("mysql:host=172.190.1.52;dbname=satlani;charset=utf8", 'satlani', '1595');
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
