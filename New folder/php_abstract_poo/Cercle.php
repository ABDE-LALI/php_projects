<?php
require_once 'forme.php';
class Cercle extends forme
{
    private $rayon;

    public function __construct(Point2D $centre, $rayon)
    {
        parent::__construct($centre);
        $this->rayon = $rayon;
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function setRayon($rayon)
    {
        $this->rayon = $rayon;
    }

    public function surface()
    {
        return pi() * pow($this->rayon, 2);
    }

    public function perimetre()
    {
        return 2 * pi() * $this->rayon;
    }

    public function __toString()
    {
        return "{Cercle : " . $this->id . "\n Centre: " . $this->centre . "\n Rayon: " . $this->rayon . "\n surface: " . $this->surface() . "\n perimetre: " . $this->perimetre() . "\n}";
    }
}
