<!DOCTYPE html>
<html lang="en">
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
                <input type="text" id="titre" name="titre" required>
            </div>
            <div class="mb-3">
                <label for="contenu">contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="auteur">auteur</label>
                <input type="text" id="auteur" name="auteur" required>
            </div>
            <div class="mb-3">
                <label for="dt_creation">date création</label>
                <input type="date" id="dt_creation" name="dt_creation" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn">
            </div>
            <!--  http://localhost/php-initiation/crud/form.php -->
        </form>

    </div>

</body>
</html>