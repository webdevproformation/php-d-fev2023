<?php
require "03-data.php";
require "03-fonction.php";

// var_dump($_GET);
// si $_GET n'est pas vide 
// alors $articles = []
if(!empty($_GET)){
    // empty() fonction native de php qui return true si le tableau est []
    // empty() fonction native de php qui return false si le tableau n'est pas []

  $id = $_GET["id"]; // récupérer le numéro de l'article 2
  /* $articles = array_filter($articles , function($item) { 
    global $id ;
    return $item["id"] === $id;
  }); */

  $resultat = [];
  foreach($articles as $a){
    if($a["id"] === $id){ // si un article dans les fichiers 03-data.php contient le même id que celui dans l'url (dans la partie variable)
        array_push($resultat, $a);
        // array_push() fonction qui permet d'ajouter un élément à un tableau  
    }
  }
  $articles = $resultat ; 
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <section class="row mt-5">
            <?php if( count($articles) === 1 ): ?>
                <!-- 1 seul article -->
                <article class='col-12'>
                    <h1> Page single </h1>
                    <h2><?php echo $articles[0]["titre"] ?></h2>
                    <img src='<?php echo $articles[0]["img"] ?>' alt='' >
                    <p><?php echo $articles[0]["contenu"] ?></p>
                    <a href="http://localhost/php-initiation/jour4/03-index.php">retour à la page d'accueil</a>
                </article>
            <?php elseif( count($articles) > 1 ) : ?>
                <!-- page d'accueil -->
                <h1> Page d'Accueil </h1>
                <?php foreach($articles as $a) : ?>
                    <div class="col-3 mb-3">
                        <?php echo genererArticle($a) ?>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <h1>Page erreur 404</h1>
                <!-- page d'erreur -->
                <p class="alert alert-danger">Erreur 404 l'article demandé n'existe pas ...</p>
            <?php endif ?>
        </section>
    </div>
</body>
</html>
<!-- http://localhost/php-initiation/jour4/03-index.php -->