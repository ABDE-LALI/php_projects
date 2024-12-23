<?php
abstract class FormeGeometrique {
    protected $numero;

    abstract protected function calculPerimetre();
    abstract protected function calculSurface();
    abstract public function toString();
}
?>