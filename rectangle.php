<?php

class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function aire() {
        return $this->longueur * $this->largeur;
    }

    public function estCarre() {
        return $this->longueur === $this->largeur;
    }

    public function afficherRectangle() {
        $caracteristiques = "Longueur: " . $this->longueur . " - Largeur: " . $this->largeur;
        $caracteristiques .= " - Périmètre: " . $this->perimetre() . " - Aire: " . $this->aire();
        if ($this->estCarre()) {
            $caracteristiques .= " - Il s'agit d'un carré.";
        } else {
            $caracteristiques .= " - Il ne s'agit pas d'un carré.";
        }
        echo $caracteristiques;
    }
}

?>