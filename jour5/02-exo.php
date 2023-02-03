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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <div class="container">
        <h1>Exo 2 - formulaire newsletter</h1>
        <form action="02-traitement.php" method="POST">
            <div class="input-field">
                <input type="email" name="email" id="email" value="<?php echo !empty($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : "" ?>">
                <label for="email">Votre email pour recevoir la newsletter</label>
            </div>
            <div class="input-field">
                <select name="langue" id="langue">
                    <option value="" disabled selected>choisir</option>
                    <option value="français" <?php echo !empty($_SESSION["form"]["langue"]) && $_SESSION["form"]["langue"] === "français" ? "selected" : "" ?>>français</option>
                    <option value="anglais" <?php echo !empty($_SESSION["form"]["langue"]) && $_SESSION["form"]["langue"] === "anglais" ? "selected" : "" ?>>anglais</option>
                    <option value="arabe" <?php echo !empty($_SESSION["form"]["langue"]) && $_SESSION["form"]["langue"] === "arabe" ? "selected" : "" ?>>arabe</option>
                </select>
                <label for="langue">choisir la langue de la newsletter</label>
            </div>
            <div>
                <input type="submit" class="btn amber darken-2">
            </div>
        </form>
        <?php if(!empty($_SESSION["message"])) : ?>
            <?php if($_SESSION["message"]["alert"] === "success") : ?>
                <p class="teal darken-1 white-text" style="padding:5px">
                    <?php echo $_SESSION["message"]["info"] ?>
                </p>
            <?php elseif($_SESSION["message"]["alert"] === "danger") : ?>
                <p class="pink darken-1 white-text" style="padding:5px">
                    <?php foreach ($_SESSION["message"]["info"] as $info) : ?>
                        <?php echo $info ?> <br>
                    <?php endforeach ?>
                </p>
            <?php endif  ?>
        <?php endif ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- http://localhost/php-initiation/jour5/02-exo.php  -->
    <script>
        console.log(M)
        document.addEventListener('DOMContentLoaded', function() {
            const elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
</body>
</html>
