<?php
require_once 'forms.php';
require_once 'Polygone.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';
require_once 'Cercle.php';

$circ = new Cercle(3);
echo $circ->toString()."<br>";
// $rect = new Rectangle(2, 4, 6);
echo $rect->toString()."<br>";
$rect = new triangle(2, 4, 6);
echo $rect->toString()."<br>";
?>
