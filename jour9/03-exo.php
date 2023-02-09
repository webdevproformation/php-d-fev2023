<?php 
// http://localhost/php-initiation/jour9/03-exo.php

class Article {
    public string $titre ;
    public string $contenu ;
    public string $dt_creation ;

    public function genererHTML() :string{
        return "
            <article>
                <h2>{$this->titre}</h2>
                <p>{$this->contenu}</p>
                <p>date de création : {$this->dt_creation}</p>
            </article>
        ";
    }
}

class ArticleTechnique extends Article {
    public string $titre = "Article technique";
    public string $contenu = "lorem ipsum" ;
    public string $dt_creation = "09/02/2023";
    // public string $dt_creation = date("d/m/Y"); // erreur 
}

/* class ArticleTechnique2 extends Article {
    public string $titre = "Article technique";
    public string $contenu = "lorem ipsum" ;
    public string $dt_creation ;
    public function __construct()
    {
        $maintenant = date("d/m/Y");
        $this->dt_creation = $maintenant  ; 
    }
} */
/* 
$article = new ArticleTechnique2;
echo $article->genererHTML(); */
