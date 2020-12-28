<?php
require_once("securisation.php");
   try{
        $pdo=new PDO("mysql:host=localhost;dbname=arbre_genealogie","root","");
   }catch(Exception $e){
         die('Erreur de connexion:'.$e->getMessage());
   }  
?> 