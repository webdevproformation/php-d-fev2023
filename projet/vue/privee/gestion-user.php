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
                <tr>
                    <td>1</td>
                    <td>Alain</td>
                    <td>alain@yahoo.fr</td>
                    <td>10/02/2023</td>
                    <td>actif</td>
                    <td>
                        <a href="" class="btn btn-warning me-2"> modifier</a>
                        <a href="" class="btn btn-danger"> supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>