<h1 class="text-center">Connexion</h1>
<form method="POST" action="lib/traitement-login.php" class="row my-5">
    <div class="col-3 offset-3">
        <input type="text" placeholder="votre login" class="form-control" name="login">
    </div>
    <div class="col-3">
        <input type="password" placeholder="votre mot de passe"  class="form-control" name="password">
    </div>
    <div class="col-12 d-flex justify-content-center mt-4">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
<?php if(!empty($_SESSION["message"])) : ?>
    <?php if($_SESSION["message"]["alert"] === "success") : ?> 
        <p class="alert alert-success" >
            <?php echo $_SESSION["message"]["info"]  ?>
        </p>
    <?php elseif($_SESSION["message"]["alert"] === "danger") : ?> 
        <p class="alert alert-danger">
            <?php foreach($_SESSION["message"]["info"] as $i) : ?>
                <?php echo $i  ?><br>
            <?php endforeach ?>
        </p>
    <?php endif ?>
<?php endif ?>