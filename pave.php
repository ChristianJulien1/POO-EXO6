<?php

class Forme {
    protected $couleur;

    public function __construct($couleur) {
        $this->couleur = $couleur;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
}

class Rectangle1 extends Forme {
    protected $longueur;
    protected $largeur;

    public function __construct($couleur, $longueur, $largeur) {
        parent::__construct($couleur);
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

    public function calculerPerimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function afficherCaracteristiques() {
        $perimetre = $this->calculerPerimetre();
        echo "Périmètre: $perimetre - Couleur: {$this->couleur}" . PHP_EOL;
    }
}

class Triangle1 extends Forme {
    protected $base;
    protected $hauteur;

    public function __construct($couleur, $base, $hauteur) {
        parent::__construct($couleur);
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

    public function calculerPerimetre() {
        return 3 * $this->base;
    }

    public function afficherCaracteristiques() {
        $perimetre = $this->calculerPerimetre();
        echo "Périmètre: $perimetre - Couleur: {$this->couleur}" . PHP_EOL;
    }
}

class Sphere extends Forme {
    protected $rayon;

    public function __construct($couleur, $rayon) {
        parent::__construct($couleur);
        $this->rayon = $rayon;
    }

    public function getRayon() {
        return $this->rayon;
    }

    public function setRayon($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerVolume() {
        return (4 / 3) * M_PI * pow($this->rayon, 3);
    }

    public function afficherCaracteristiques() {
        $volume = $this->calculerVolume();
        echo "Volume: $volume - Couleur: {$this->couleur}" . PHP_EOL;
    }
}

?>