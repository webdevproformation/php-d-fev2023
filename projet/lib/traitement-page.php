<?php 

// créer le fichier traitement-page.php 

// dans ce fichier 
// ouvrir une session
session_start(); 
// créer une variable erreurs tableau vide 
$erreurs = [];
// connexion à la base de données
require "base-de-donnee.php" ;

// vérifier que tous les champs sont remplis => erreur 
if(
    empty($_POST["titre"]) || empty($_POST["slug"]) || empty($_POST["contenu"]) || empty($_POST["image"]) || empty($_POST["auteur"]) 
){
        array_push($erreurs , "veuillez compléter tous les champs");
}   
// verifier que titre / slug /  auteur contiennent entre 4 et 255 lettres
$champs = ["titre", "slug" , "auteur"];
foreach($champs as $c){
    if(strlen($_POST[$c]) <= 4 ||  strlen($_POST[$c]) >= 255){
        array_push($erreurs , "le {$c} titre doit contenir entre 4 et 255 lettres");
    }
}
// verifier que contenu contient 4 et 65000 lettres 
if(strlen($_POST["contenu"]) <= 4 ||  strlen($_POST["contenu"]) >= 65000){
    array_push($erreurs , "le contenu titre doit contenir entre 4 et 65000 lettres");
}
// img url valide filter_var FILTER_VALIDATE_URL
if(!filter_var($_POST["image"] , FILTER_VALIDATE_URL)){
    array_push($erreurs , "l'url du champ image n'est pas correct");
}

$_SESSION["form"] = $_POST ;

// si tout est ok 
if(count($erreurs) === 0){
    $sth = $connexion->prepare("
        INSERT INTO pages
        ( titre , slug , contenu , image , auteur  , dt_creation)
        VALUES 
        ( :titre , :slug , :contenu , :image , :auteur , NOW())
    ");
    $sth->execute($_POST);
    $_SESSION["message"] = [
        "alert" => "success" ,
        "info" => "la page a bien été insérée en base de données"
    ];
}else {
    $_SESSION["message"] = [
        "alert" => "danger" ,
        "info" => $erreurs
    ];
}
header("Location: http://localhost/php-initiation/projet/index.php?page=page&partie=privee");
exit ;
// INSERT en base de données 

// sinon message d'erreur sous le formulaire 


