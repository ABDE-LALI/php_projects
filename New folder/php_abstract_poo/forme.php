<?php
require_once 'Rectangle.php';
    abstract class Forme {
    protected static $compteur = 0;
    protected $id;
    protected $centre;

    public function __construct(Point2D $centre) {
        $this->centre = $centre;
        self::$compteur++;
        $this->id = self::$compteur;
    }

    abstract public function surface();
    abstract public function perimetre();

    public function bouger($dx, $dy) {
        $this->centre->bouger($dx, $dy);
    }

    public function getId() {
        return $this->id;
    }

    public function getCentre() {
        return $this->centre;
    }
}
