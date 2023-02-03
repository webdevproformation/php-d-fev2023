<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-dark">
        <nav  class="navbar navbar-expand container navbar-dark mb-3">
            <span class="navbar-brand fs-3">
                ✨
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://localhost/php-initiation/blog/index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/php-initiation/blog/index.php?page=contact" 
                        class="nav-link">Nous contacter</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/php-initiation/blog/index.php?page=login" 
                        class="nav-link">Connexion</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <?php if(empty($_GET)) : ?>
            <!-- page d'accueil -->
            <?php require "vue/accueil.php" ?>
        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "article"  ) : ?>
            <!-- page article  -->
            <?php require "vue/article.php" ?>
        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "contact"  ) : ?>
            <!-- page de contact -->
            <?php require "vue/contact.php" ?>
        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "login"  ) : ?>
            <!-- page login -->
            <?php require "vue/login.php" ?>
        <?php elseif( !empty($_GET["page"]) && $_GET["page"] === "mention"  ) : ?>
            <!-- page mention -->
            <?php require "vue/mention.php" ?>
        <?php else : ?>
            <!-- page 404 -->
            <?php require "vue/404.php" ?>
        <?php endif  ?>
    </div>
    <footer class="text-center">
            &copy; 2023 - <a href="http://localhost/php-initiation/blog/index.php?page=mention">mentions légales</a>
    </footer>
</body>
</html>