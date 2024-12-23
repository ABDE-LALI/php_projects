<?php
class Rectangle extends Polygone {
    public function calculPerimetre() {
        return 2 * ($this->cote1 + $this->cote2);
    }

    public function calculSurface() {
        return $this->cote1 * $this->cote2;
    }

    public function toString() {
        return "Rectangle: Perimetre : " . $this->calculPerimetre() . " Surface : " . $this->calculSurface();
    }
}
?>