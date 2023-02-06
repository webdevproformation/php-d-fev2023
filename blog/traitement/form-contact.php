<?php 
// http://localhost/php-initiation/blog/traitement/form-contact.php
session_start();

$erreurs = [];
// si un des deux champs est vide => ajouter une erreur 
if(empty($_POST["email"]) || empty($_POST["commentaire"])){
    array_push($erreurs , "veuillez compléter les deux champs");
}

// est ce que l'email est un email avec une forme valide 
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "l'email transmis n'est pas valide");
}

// le champ commentaire doit contenir au mimnimum 4 lettres et maximum 1000 lettres
if(strlen($_POST["commentaire"]) <= 4 || strlen($_POST["commentaire"]) > 1000){
    array_push($erreurs , "le champ commentaire doit contenir entre 4 et 1000 lettres");
}

$_SESSION["form"] = $_POST ; // permet de retourner les valeurs dans le formulaire

if(count($erreurs) === 0){ // afficher un message sous le formulaire
    $_SESSION["message"] = [
        "alert" => "success",
        "info" => "merci !!!"
    ];
    $_SESSION["form"] = []; // vider les réponses du formulaire 
}else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs 
    ];
}
header("Location: http://localhost/php-initiation/blog/index.php?page=contact"); 
// rediriger vers le formulaire
exit ; 