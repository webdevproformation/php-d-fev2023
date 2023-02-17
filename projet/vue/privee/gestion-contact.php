<?php
    require "lib/fonctions.php";
    isLogged();

    $sth = $connexion->prepare("
    SELECT id, email, commentaire , DATE_FORMAT(dt_creation , '%d/%m/%Y') AS `dt_creation`  FROM contact ;
    ");
    $sth->execute();
    $commentaires = $sth->fetchAll();
?>

<h1>Gestion des pages du site</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>commentaire</th>
                    <th>date création</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commentaires as $c) : ?>
                    <tr>
                        <td><?php echo htmlentities($c["id"]) ?></td>
                        <td><?php echo htmlentities($c["email"]) ?></td>
                        <td><?php echo nl2br(htmlentities($c["commentaire"])) ?></td>
                        <td><?php echo htmlentities($c["dt_creation"]) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
