<h1>Ajouter un nouveau profil user</h1>
<section class="row">
    <div class="col-3">
        <?php require "lib/menu-privee.php" ?>
    </div>
    <div class="col">
       <form action="" method="POST">
            <div class="mb-3">
                <label for="nom"> saisir le nom</label>
                <input type="text" id="nom"  class="form-control" name="nom" placeholder="le nom">
            </div>
            <div class="mb-3">
                <label for="email"> saisir le email</label>
                <input type="email" id="email"  class="form-control" 
                        name="email" placeholder="votre@email.fr">
            </div>
            <div class="mb-3">
                <label for="password"> saisir le password</label>
                <input type="text" id="password"  class="form-control" 
                        name="password" placeholder="votre password">
            </div>
            <div class="mb-3">
                <label for="actif">
                    <input type="checkbox" name="actif"> status 
                </label>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success">
            </div>
       </form>
       <?php require "lib/message-flash.php" ?>
    </div>
</section>