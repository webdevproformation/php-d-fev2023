<?php 
// essayer de se connecter à la base de données 
// et la variable $connexion va être partagée entre plusieurs fichiers 
try{
    $connexion = new PDO("mysql:host=localhost;dbname=projet" , "root", "");
}catch(Exception $e){
    echo "impossible de se connecter à la base de données";
    var_dump($e); 
    exit ;
}