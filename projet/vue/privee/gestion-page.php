<h1>Gestion des pages du site</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
        <div class="text-end mb-3">
            <a href="<?php echo WWW ?>?page=page&partie=privee&action=add" class="btn btn-primary">ajouter une nouvelle page</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>slug</th>
                    <th>image</th>
                    <th>auteur</th>
                    <th>date création</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</section>
<!-- cas pratique dans la base "projet" 
    créer une nouvelle table articles 
    contient 7 colonnes 
    id clé primaire auto incrément
    titre maximum de 255 lettres
    slug maximum de 255 lettres
    contenu maximum de 65 mille lettres
    image maximum de 255 lettres
    auteur maximum de 255 lettres
    dt_creation date et heure 
-->