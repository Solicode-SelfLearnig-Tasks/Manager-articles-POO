<?php

class Article {
    public $titre;
    public $contenu;

    public function afficher() {
        return "Titre : " . $this->titre . " - Contenu : " . $this->contenu;
    }
}

$article1 = new Article("Introduction à PHP", "PHP est un langage de script côté serveur.");
echo $article1->afficher()."<br>";
$article2 = new Article("Programmation orientée objet", "La POO facilite la modularité et la maintenance.");
echo $article2->afficher()."<br>";