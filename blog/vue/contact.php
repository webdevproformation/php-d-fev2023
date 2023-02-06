<!--
dans le fichier login.php
formulaire bootstrap => 
login
password  
 -->
<h1>Nous contacter</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="email">votre email</label>
        <input type="email" name="email" class="form-control" id="email" required placeholder="saisir votre email">
    </div>
    <div class="mb-3">
        <label for="commentaire">votre commentaire</label>
        <textarea name="commentaire" id="commentaire" cols="30" rows="4" class="form-control" placeholder="saisir votre commentaire" required></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-outline-primary btn-sm">
    </div>
</form>