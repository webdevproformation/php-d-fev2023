<?php 

session_start();
$erreurs = [];
require "base-de-donnee.php";

if(
    empty($_POST["nom"]) || 
    empty($_POST["email"]) ||
    empty($_POST["password"]) 
){
    array_push($erreurs , "veuillez compléter les champs");
}

if(strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255){
    array_push($erreurs , "le champ nom doit contenir entre 4 et 255 lettres");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "l'email n'est pas conforme");
}

if(strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255){
    array_push($erreurs , "le champ password doit contenir entre 4 et 255 lettres");
}

// autre test => il ne faut pas qu'il y ait 2 utilisateurs qui disposent du même 

if(isset($_POST["actif"])){
    $_POST["actif"] = "1";
}else {
    $_POST["actif"] = "0";
}

// traitements 
$_SESSION["form"] = $_POST ;

if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    // ajouter le profil en base données 
    header("Location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee");
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/php-initiation/projet/index.php?page=user&partie=privee&action=add");
}
exit ;
