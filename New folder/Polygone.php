<?php
abstract class Polygone extends FormeGeometrique {
    protected $cote1;   
    protected $cote2;

    public function __construct($cote1, $cote2) {
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
    }
}
?>