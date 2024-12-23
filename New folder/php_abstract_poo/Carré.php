<?php
require_once 'Rectangle.php';
final class Carre extends Rectangle {
    public function __construct(Point2D $centre, $cote) {
        parent::__construct($centre, $cote, $cote);
    }

    public function __toString() {
        return "{Carre : " . $this->getId() . "\n Centre: " . $this->getCentre() . "\n Longueur: " . $this->getLongueur() . "\n surface: " . $this->surface() . "\n perimetre: " . $this->perimetre() . "\n}";
    }
}
