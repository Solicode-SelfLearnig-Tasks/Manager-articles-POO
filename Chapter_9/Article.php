<?php

class Article
{
    private $titre;
    private $contenu;

    public function __construct($titre = "", $contenu = "")
    {
        if (!empty($titre)) {
            $this->setTitre($titre);
        }
        if (!empty($contenu)) {
            $this->setContenu($contenu);
        }
    }

    public function setTitre($titre)
    {
        if (!empty($titre) && strlen($titre) > 3) {
            $this->titre = $titre;
        } else {
            echo "Titre invalide. Le titre doit avoir plus de 3 caractères.<br>";
        }
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setContenu($contenu)
    {
        $this->contenu = htmlspecialchars($contenu);
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function afficher()
    {
        return "Titre : {$this->titre} - Contenu : {$this->contenu}<br>";
    }
}
?>
