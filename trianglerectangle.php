<?php

class Triangle {
    private $base;
    private $hauteur;

    public function __construct($base, $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function perimetre() {
        $hypotenuse = sqrt(pow($this->base, 2) + pow($this->hauteur, 2));
        return $this->base + $this->hauteur + $hypotenuse;
    }

    public function aire() {
        return ($this->base * $this->hauteur) / 2;
    }

    public function afficherTriangle() {
        $caracteristiques = "Base: " . $this->base . " - Hauteur: " . $this->hauteur;
        $caracteristiques .= " - Périmètre: " . $this->perimetre() . " - Aire: " . $this->aire();
        echo $caracteristiques;
    }
}

?>