<?php 
session_start();
$erreurs = [];

// verifie que les champs ne sont pas vides
if(empty($_POST["email"]) ||  empty($_POST["langue"])){
    array_push($erreurs , "tous les champs doivent être remplis");
}

// vérifie que l'email n'est pas invalide
if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs , "le mail n'est pas valide");
}
$listeLangueValide = ["français", "anglais" , "arabe"];
// vérifie que la langue fait bien partie du tableau de la ligne précédente
if(!in_array($_POST["langue"]  , $listeLangueValide)){
    array_push($erreurs , "la langue de la newsletter est invalide");
}
$_SESSION["form"] =  $_POST ;
if(count($erreurs) === 0){
    $_SESSION["message"] = [
        "alert" => "success",
        "info"  => "merci !!"
    ];
}else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info"  => $erreurs
    ];
}
header("Location: 02-exo.php");
exit;