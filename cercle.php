<?php

class Cercle {
    private $diametre;

    public function __construct($diametre) {
        $this->diametre = $diametre;
    }

    public function getDiametre() {
        return $this->diametre;
    }

    public function setDiametre($diametre) {
        $this->diametre = $diametre;
    }

    public function perimetre() {
        $rayon = $this->diametre / 2;
        return 2 * pi() * $rayon;
    }

    public function aire() {
        $rayon = $this->diametre / 2;
        return pi() * pow($rayon, 2);
    }

    public function afficherCercle() {
        $caracteristiques = "Diamètre: " . $this->diametre;
        $caracteristiques .= " - Périmètre: " . $this->perimetre() . " - Aire: " . $this->aire();
        echo $caracteristiques;
    }
}

?>