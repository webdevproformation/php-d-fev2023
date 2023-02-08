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
        <h1>créer un nouvel utilisateur</h1>
        <form action="traitement.php" method="POST">
            <div class="mb-3">
                <label for="nom">votre nom</label>
                <input type="text" id="nom" name="nom" required placeholder="saisir votre nom">
            </div>
            <div class="mb-3">
                <label for="email">votre email</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.fr">
            </div>
            <div class="mb-3 zone-password">
                <label for="password">votre mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="password">
                <button class="show-password">show</button>
            </div>
            <div class="mb-3">
                <label for="role">votre rôle</label>
                <select name="role" id="role">
                    <option value="">veuillez choisir un rôle</option>
                    <option value="user">user</option>
                    <option value="rédacteur">rédacteur</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="dt_creation">date de création du profil</label>
                <input type="date" id="dt_creation" name="dt_creation" required>
            </div>
            <div class="mb-3">
                <label for="actif">
                    <input type="checkbox" name="actif" id="actif"> 
                    utilisateur actif ??
                </label>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
<!-- http://localhost/php-initiation/gestion-utilisateur/form.php -->