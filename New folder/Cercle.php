<?php
class Cercle extends FormeGeometrique {
    const PI = 3.14159;
    public $rayon;
    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }
    public function calculPerimetre() {
        return 2 * self::PI * $this->rayon;
    }

    public function calculSurface() {
        return self::PI * pow($this->rayon, 2);
    }

    public function toString() {
        return "Cercle: Perimetre : " . $this->calculPerimetre() . " Surface : " . $this->calculSurface();
    }
}
?>