<?php
class Triangle extends Polygone {
    private $cote3;

    public function __construct($cote1, $cote2, $cote3) {
        parent::__construct($cote1, $cote2);
        $this->cote3 = $cote3;
    }

    public function calculPerimetre() {
        return $this->cote1 + $this->cote2 + $this->cote3;
    }

    public function calculSurface() {
        return $this->cote3*sqrt(pow($this->cote1, 2) + pow($this->cote2, 2))/2;
    }

    public function toString() {
        return "Triangle: Perimetre : " . $this->calculPerimetre() . " Surface : " . $this->calculSurface();
    }
}
?>