<?php 
$sth = $connexion->prepare("
    SELECT * FROM pages WHERE slug = :slug
");
$sth->execute(["slug" => "accueil"]);
$accueil = $sth->fetch();
?>
<?php if($accueil) : ?>
<h1><?php echo $accueil["titre"] ?></h1>
<div>
    <?php echo $accueil["contenu"] ?>
</div>
<?php else : ?>
    <p class="mt-5">veuillez créer dans la page dans le backoffice avec le slug "accueil"</p>
<?php endif ?>
