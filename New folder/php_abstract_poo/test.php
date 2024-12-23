<?php
function testFormes() {
    $point1 = new Point2D(2, 3);
    $rectangle = new Rectangle($point1, 1, 2);
    echo $rectangle . "\n";

    $point2 = new Point2D(1, 2);
    $cercle = new Cercle($point2, 2);
    echo $cercle . "\n";

    $cercle->bouger(2, 1);
    echo $cercle . "\n";

    $point3 = new Point2D(3, 3);
    $carre = new Carre($point3, 1);
    echo $carre . "\n";
}

testFormes();
