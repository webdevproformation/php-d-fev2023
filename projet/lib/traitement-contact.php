<?php 

session_start();
$erreurs = [] ;
require "base-de-donnee.php";
require "const.php";

if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs, "veuillez remplir les deux champs");
}

if(strlen($_POST["email"]) <= 4 ||  strlen($_POST["email"]) >= 255){
    array_push($erreurs , "le email titre doit contenir entre 4 et 255 lettres");
}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "le email n'est pas conforme");
}

if(strlen($_POST["commentaire"]) <= 4 ||  strlen($_POST["commentaire"]) >= 65000){
    array_push($erreurs , "le contenu titre doit contenir entre 4 et 65000 lettres");
}

$_SESSION["form"] = $_POST ;

if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    $sth = $connexion-> prepare("
        INSERT INTO contact
        (email , commentaire , dt_creation)
        VALUES 
        (:email , :commentaire , NOW())
    ");
    $sth->execute($_POST);

    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "merci pour votre message !!"
    ];
    
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
}
header("Location: ".WWW."?page=contact");
exit ;