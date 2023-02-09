<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un nouvel article</h1>
        <form action="traitement.php" method="POST">
            <div class="mb-3">
                <label for="titre">titre</label>
                <input type="text" id="titre" name="titre" required 
                value="<?php echo !empty($_SESSION["form"]["titre"]) ? $_SESSION["form"]["titre"] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="contenu">contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="5" required><?php echo !empty($_SESSION["form"]["contenu"]) ? $_SESSION["form"]["contenu"] : '' ?></textarea>
            </div>
            <div class="mb-3">
                <label for="auteur">auteur</label>
                <input type="text" id="auteur" name="auteur" required 
                value="<?php echo !empty($_SESSION["form"]["auteur"]) ? $_SESSION["form"]["auteur"] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="dt_creation">date création</label>
                <input type="date" id="dt_creation" name="dt_creation" required
                value="<?php echo !empty($_SESSION["form"]["dt_creation"]) ? $_SESSION["form"]["dt_creation"] : '' ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn">
            </div>
            <!--  http://localhost/php-initiation/crud/form.php -->
        </form>
        <?php if(!empty($_SESSION["message"])) : ?>
            <?php if($_SESSION["message"]["alert"] === "success") : ?> 
                <p class="white-text green" 
                   style="padding:5px 10px">
                   <?php echo $_SESSION["message"]["info"]  ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
                <p class="white-text pink" 
                   style="padding:5px 10px">
                   <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                     <?php echo $i  ?><br>
                   <?php endforeach ?>
                </p>
            <?php endif ?>
        <?php endif ?>
    </div>

</body>
</html>