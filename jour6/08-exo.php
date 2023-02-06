<?php 
// http://localhost/php-initiation/jour6/08-exo.php
class Formation {
    public string $nom = "devOps";
    public int $duree = 5 ;
    public int $prix = 5000 ;
    public array $matieres = ["linux", "php", "html", "css" ] ;

    public function devis() :string {
        // retourner le texte suivant "la formation devOps coûte 5 000 euros"
        return "la formation {$this->nom} coûte " . number_format($this->prix, 0 , "," , " ") . " euros";
    }
    public function programme() :string{
        // retourner le texte suivant "il y a 4 sujets abordés durant les 5 semaines"
        return "il y a " . count($this->matieres) . "  sujets abordés durant les " . $this->duree . " semaines";
    }
    public function sommaire() :string{
        // retourne le texte suivant : vous allez étudier linux, php, html et css 
        return "vous allez étudier {$this->matieres[0]}, {$this->matieres[1]}, {$this->matieres[2]} et {$this->matieres[3]}"; 
    }
}

$f = new Formation();
echo $f->devis() ."<br>";
echo $f->programme() ."<br>";
echo $f->sommaire() ."<br>";