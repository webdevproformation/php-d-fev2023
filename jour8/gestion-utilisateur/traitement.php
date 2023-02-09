<?php 

session_start();
$erreurs = [];

// vérifier si tous les champs sont bien transmis avec des valeurs dedans
if(
    empty($_POST["nom"]) ||
    empty($_POST["email"]) ||
    empty($_POST["password"]) ||
    empty($_POST["role"]) ||
    empty($_POST["dt_creation"])
){
    array_push($erreurs, "veuillez compléter tous les champs");
}

if(strlen($_POST["nom"]) <= 4 || strlen($_POST["nom"]) >= 255){
    array_push($erreurs, "le nom doit contenir entre 4 et 255 lettres");
}

if(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    array_push($erreurs, "l'email n'est pas conforme");
}

if(strlen($_POST["password"]) <= 4 || strlen($_POST["password"]) >= 255){
    array_push($erreurs, "le password doit contenir entre 4 et 255 lettres");
}

$listeRoles = ["user", "rédacteur" , "admin"] ;

if(!in_array( $_POST["role"] , $listeRoles)){
    array_push($erreurs, "vous ne pouvez être que user, rédacteur , admin");
}

if(!strtotime($_POST["dt_creation"])){
    array_push($erreurs, "la date de création n'est pas conforme");
}

if(isset($_POST["actif"]) && $_POST["actif"] !== "on"){
    array_push($erreurs, "la valeur du status n'est pas correcte");
}

/* var_dump($_POST); // est ce que j'ai bien tous les champs du formulaire remplis ???
var_dump($erreurs); // est ce que un des tests précédents est vrai ?? 
exit ;  */

if(isset($_POST["actif"])){
    $_POST["actif"] = "1" ;
}else {
    $_POST["actif"] = "0" ;
}

$_SESSION["form"] = $_POST ;

if(count($erreurs) === 0){
    // se connecter à la base données
    $connexion = new PDO("sqlite:./base-users.db");
    // créer la table users si nécessaire
    $connexion->query("
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT ,
            nom VARCHAR(255),
            email VARCHAR(255) ,
            password VARCHAR(255) ,
            role VARCHAR(9) ,
            dt_creation DATE , 
            actif BOOLEAN
        )
    ");
    
    // INSERER les données 
    $sth = $connexion->prepare("
        INSERT INTO users
        (nom , email , password,role,dt_creation , actif)
        VALUES
        (:nom , :email , :password,:role,:dt_creation , :actif)
    "); 
    $sth->execute($_POST);

    // dire merci 
    $_SESSION["message"] = [
        "alert" => "success",
        "info"  => "merci le profil utilisateur a été créé en base de données"
    ];
    // vider le formulaire 
    $_SESSION["form"] = [];
}else {
    // dire les erreurs 
     // dire les erreurs 
     $_SESSION["message"] = [
        "alert" => "danger",
        "info"  => $erreurs
    ];
}
// redirection le formulaire 
header("Location: http://localhost/php-initiation/gestion-utilisateur/form.php");
// stop 
exit ; 