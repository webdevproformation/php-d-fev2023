<h1>Nous contacter</h1>
<form action="lib/traitement-contact.php" method="POST">
    <div class="mb-3">
        <label for="email">votre email</label>
        <input type="email" class="form-control" placeholder="votre@email.fr" name="email" value="<?php echo isset($_SESSION["form"]["email"]) ? $_SESSION["form"]["email"] : ""  ?>">
    </div>
    <div class="mb-3">
        <label for="commentaire">votre commentaire</label>
        <textarea name="commentaire" id="commentaire" cols="30" rows="10" class="form-control contenu"><?php echo isset($_SESSION["form"]["commentaire"]) ? $_SESSION["form"]["commentaire"] : ""  ?></textarea>
    </div>
    <div>
        <input type="submit" class="btn btn-dark">
    </div>
</form>

<?php require "lib/message-flash.php" ?>
<?php  require "lib/tinymce.php" ?>