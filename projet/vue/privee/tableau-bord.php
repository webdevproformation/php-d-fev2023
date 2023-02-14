<?php 
// vérifier que la personne qui accède à cette page est bien connectée
if(!isset($_SESSION["user"])){
    header("Location: ". WWW . "?page=login");
    $_SESSION["message"] = [
        "alert" => "danger",
        "info"  => ["veuillez vous identifier pour accéder à cette page"]
    ];
    exit ; 
}
?>

<h1>tableau de bord</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        Bienvenu dans l'espace de gestion de votre site internet 
    </div>
</section>