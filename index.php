<?php

require_once "rectangle.php";
require_once "trianglerectangle.php";
require_once "cercle.php";
require_once "pave.php";

$rectangle = new Rectangle(5, 5);
$rectangle->afficherRectangle();
echo "<br><br>";
$triangle = new Triangle(5, 8);
$triangle->afficherTriangle();
echo "<br><br>";
$cercle = new Cercle(10);
$cercle->afficherCercle();
echo "<br><br>";
$rectangle = new Rectangle1('rouge', 5, 3);
$rectangle->afficherCaracteristiques();

$triangle = new Triangle1('bleu', 4, 4);
$triangle->afficherCaracteristiques();

$sphere = new Sphere('vert', 2);
$sphere->afficherCaracteristiques();

?>