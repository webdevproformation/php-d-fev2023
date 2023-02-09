<?php
session_start();
?>
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
        <h1>créer un nouvel utilisateur</h1>
        <form action="traitement.php" method="POST">
            <div class="mb-3">
                <label for="nom">votre nom</label>
                <input type="text" id="nom" name="nom" required placeholder="saisir votre nom" 
                value="<?php echo !empty($_SESSION["form"]["nom"]) ? $_SESSION["form"]["nom"] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="email">votre email</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.fr"
                value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : '' ?>">
            </div>
            <div class="mb-3 zone-password">
                <label for="password">votre mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="password" 
                value="<?php echo !empty($_SESSION["form"]["password"]) ? $_SESSION["form"]["password"] : '' ?>">
                <button class="show-password">show</button>
            </div>
            <div class="mb-3">
                <label for="role">votre rôle</label>
                <select name="role" id="role">
                    <option value="">veuillez choisir un rôle</option>
                    <option value="user" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "user" ? 'selected' : '' ?>>user</option>
                    <option value="rédacteur" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "rédacteur" ? 'selected' : '' ?>>rédacteur</option>
                    <option value="admin" <?php echo !empty($_SESSION["form"]["role"]) && $_SESSION["form"]["role"] === "admin" ? 'selected' : '' ?>>admin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="dt_creation">date de création du profil</label>
                <input type="date" id="dt_creation" name="dt_creation" required 
                value="<?php echo !empty($_SESSION["form"]["dt_creation"]) ? $_SESSION["form"]["dt_creation"] : '' ?>">
            </div>
            <div class="mb-3">
                <label for="actif">
                    <input type="checkbox" name="actif" id="actif" <?php echo !empty($_SESSION["form"]["actif"]) && $_SESSION["form"]["actif"] === "1" ? 'checked' : '' ?>> 
                    utilisateur actif ??
                </label>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn">
            </div>
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
    <script>
        // préremplir le champ date de création à aujourd'hui 
        
        if(document.querySelector("#dt_creation").value === ""){
            /* const dt = new Date(); // récupérer la date du jour et stocker dans la variable dt 
            const annee = dt.getFullYear(); // extraire l'année de dt
            const mois = ("0" + (dt.getMonth() + 1) ).slice(-2); // extraire le mois de dt + 1 
            // dt.getMonth() => decembre => 11
            // dt.getMonth() + 1 => janvier => 12
            // "0" + dt.getMonth() + 1 => janvier => 012
            // ("0" + dt.getMonth() + 1 ).slice(-2) => 12
                                
            const jour = ("0" + dt.getDate()).slice(-2); // extraite le jour de dt */

            // document.querySelector("#dt_creation").value = `${annee}-${mois}-${jour}`;
            document.querySelector("#dt_creation").valueAsDate = new Date();
            // php date()
            // js new Date() Date.now()
            // SQL NOW()
        }

        // lorsque l'on clique sur le bouton show => changer le type du champ password => text
        // lorsque je reclique que le bouton show => changer le type du champ text => password 
        document.querySelector(".show-password").addEventListener("click", function(e){
            e.preventDefault();
            const type = document.querySelector("#password").type ;
            if(type === "password"){
                document.querySelector("#password").type = "text"
                e.target.innerText = "hide"
            }else {
                document.querySelector("#password").type = "password"
                e.target.innerText = "show"
            }
        })

    </script>
</body>
</html>
<!-- http://localhost/php-initiation/gestion-utilisateur/form.php -->