<?php 
session_start(); // étant donné formulaire + authentification => prépare le terrain

// le nom de domaine de ton projet 
// appeler la base de données 
require "lib/base-de-donnee.php";
require "lib/const.php";

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
    <header class="bg-success">
        <nav class="navbar navbar-expand navbar-dark container">
            <span class="navbar-brand">Blog</span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=presentation" class="nav-link">Présentation</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=contact" class="nav-link">Nous contacter</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php if( isset($_SESSION["user"]) ) :?>
                    <li class="nav-item">
                        <a href="index.php?page=accueil&partie=privee" class="nav-link">Tableau Bord</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=logout" class="nav-link">Déconnexion</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="index.php?page=login" class="nav-link">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>
    </header>    
    <!-- http://localhost/php-initiation/projet/index.php  -->
    <div class="container">

        <!-- routing => url => page -->
        <?php if( empty($_GET)  ) : ?>
            <?php require "vue/public/accueil.php" ?>
        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "presentation" ) : ?>
            <?php require "vue/public/presentation.php" ?>

        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "login" ) : ?>
            <?php require "vue/public/login.php" ?>

        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "mention" ) : ?>
            <?php require "vue/public/mention-legale.php" ?>
        
            <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "contact" ) : ?>
            <?php require "vue/public/contact.php" ?>

        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "logout" ) : ?>
            <!-- gérer la déconnexion --> 
            <?php 
                unset($_SESSION["user"]) ;
                $_SESSION["message"] = [
                    "alert" => "success",
                    "info" => "vous avez été déconnecté avec succès"
                ];
                header("Location: " . WWW . "?page=login");
                exit; // direction et stop 
            ?>

        <!-- partie privée -->

        <?php elseif( !empty($_GET["page"]) && !empty($_GET["partie"]) && 
                $_GET["page"] === "accueil" && 
                $_GET["partie"] === "privee") : ?>
            <!-- index.php?page=page&partie=privee -->
            <?php require "vue/privee/tableau-bord.php" ?>

        <?php elseif( !empty($_GET["page"]) && !empty($_GET["partie"]) && 
                $_GET["page"] === "user" && 
                $_GET["partie"] === "privee") : ?>

            <?php if(!empty($_GET["action"]) && $_GET["action"] == "add" ) : ?>
                
                <?php require "vue/privee/gestion-user-form.php" ?>

            <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "delete" ) : ?>

                <?php 
                    $sth = $connexion->prepare("
                        DELETE FROM users WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    header("Location: ". WWW . "?page=user&partie=privee");
                    exit ; 
                ?>

            <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "update" ) : ?>
                
                <?php 
                    $sth = $connexion->prepare("
                        SELECT * FROM users WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    $user = $sth->fetch();
                ?>
                <?php require "vue/privee/gestion-user-form.php" ?>


            <?php else : ?>
                <?php require "vue/privee/gestion-user.php" ?>
            <?php endif ?>

        <?php elseif( !empty($_GET["page"]) && !empty($_GET["partie"]) && 
                $_GET["page"] === "page" && 
                $_GET["partie"] === "privee") : ?>

            <!-- gérer le CRUD des pages ajout -->
            <?php if(!empty($_GET["action"]) && $_GET["action"] == "add" ) : ?>
                <?php require "vue/privee/gestion-page-form.php" ?>

            <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "delete" ) : ?>
                <!-- suppression -->
                <?php 
                    $sth = $connexion->prepare("
                        DELETE FROM pages WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    header("Location: ". WWW . "?page=page&partie=privee");
                    exit ; 
                ?>

            <?php elseif(!empty($_GET["action"]) && $_GET["action"] == "update" ) : ?>

                <?php 
                    $sth = $connexion->prepare("
                        SELECT * FROM pages WHERE id = :id
                    ");
                    $sth->execute(["id" => $_GET["id"]]);
                    $page = $sth->fetch();
                ?>
                <?php require "vue/privee/gestion-page-form.php" ?>

            <?php else : ?>
                <?php require "vue/privee/gestion-page.php" ?>
            <?php endif ?>

        <?php elseif( !empty($_GET["page"]) && !empty($_GET["partie"]) && 
                $_GET["page"] === "contact-management" && 
                $_GET["partie"] === "privee") : ?>
                <?php require "vue/privee/gestion-contact.php" ?>

        <!-- fin partie privée -->
        <?php else : ?>
            <?php require "vue/public/404.php" ?>
        <?php endif ?>

    </div>
    <footer class="my-3 text-center">
        <a href="<?php echo WWW ?>?page=mention" class="text-decoration-none">mentions légales</a>
    </footer>
</body>
</html>
<!-- http://localhost/php-initiation/projet/index.php  -->