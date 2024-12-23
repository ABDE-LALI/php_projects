<?php
require_once 'forme.php';
class Rectangle extends forme
{
    private $largeur;
    private $longueur;

    public function __construct(Point2D $centre, $largeur, $longueur)
    {
        parent::__construct($centre);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    public function surface()
    {
        return $this->largeur * $this->longueur;
    }

    public function perimetre()
    {
        return 2 * ($this->largeur + $this->longueur);
    }

    public function __toString()
    {
        return "{Rectangle : " . $this->id . "\n Centre: " . $this->centre . "\n Largeur: " . $this->largeur . "\n Longueur: " . $this->longueur . "\n surface: " . $this->surface() . "\n perimetre: " . $this->perimetre() . "\n}";
    }
}
