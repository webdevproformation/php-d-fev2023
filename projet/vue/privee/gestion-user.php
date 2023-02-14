<?php
require "lib/fonctions.php";
isLogged();

$sth = $connexion->prepare("
    SELECT id, nom, email, DATE_FORMAT(dt_creation , '%d/%m/%Y') AS `dt_creation` , 
    (CASE status WHEN  1  THEN 'actif' ELSE 'inactif' END) AS `status`
    FROM users
");
$sth->execute();
$resultat = $sth->fetchAll();
?>

<h1>Gestion des utilisateurs</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <div  class="text-end mb-3">
            <a 
                href="<?php echo WWW ?>?page=user&partie=privee&action=add" 
                class="btn btn-primary">ajouter une nouveau profil
            </a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>date création</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultat as $user) : ?>
                <tr>
                    <!-- htmlentities() fonction de sécurité pour éviter les injections de code -->
                    <td><?php echo htmlentities($user["id"]) ?></td>
                    <td><?php echo htmlentities($user["nom"]) ?></td>
                    <td><?php echo htmlentities($user["email"]) ?></td>
                    <td><?php echo htmlentities($user["dt_creation"]) ?></td>
                    <td><?php echo htmlentities($user["status"]) ?></td>
                    <td>
                        <a href="<?php echo WWW ?>?page=user&partie=privee&action=update&id=<?php echo htmlentities($user["id"]) ?>"  class="btn btn-warning me-2"> modifier</a>
                        <a 
                            href="<?php echo WWW ?>?page=user&partie=privee&action=delete&id=<?php echo htmlentities($user["id"]) ?>" 
                            class="btn btn-danger" 
                            onclick="return confirm('êtes vous sûr de vouloir supprimer ce profil')"> 
                            supprimer
                        </a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
