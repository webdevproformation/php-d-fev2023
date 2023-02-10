<?php 

session_start();
$erreurs = [] ;
require "base-de-donnee.php";

if(empty($_POST["login"]) || empty($_POST["password"])){
    array_push($erreurs, "veuillez remplir les deux champs");
}

// recherche dans la table users une ligne dans laquelle le login saisit dans le formulaire = email ET
// password saisit hashé  = password 
$sth = $connexion->prepare("SELECT * FROM users WHERE email = :login AND password = MD5(:password)");

$sth->execute($_POST);
$user = $sth->fetch(); // si j'ai trouvé => tableau // si je n'ai pas trouvé empty 

if(empty($user)){
    array_push($erreurs, "les identifiants sont invalides");
}

$_SESSION["form"] = $_POST ;

if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    $_SESSION["user"] = $user ; 
    
    header("Location: http://localhost/php-initiation/projet/index.php?page=accueil&partie=privee");
}else{
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/php-initiation/projet/index.php?page=login");
}
exit ;

echo "je suis le traitement pour le formulaire de connexion" ; 
// vérifiez que les champs login et password sont bien remplis => redirection vers la page tableau de bord 
// vérifiez que les champs login et password sont bien remplis => sinon afficher un message d'erreur sous le formulaire 
