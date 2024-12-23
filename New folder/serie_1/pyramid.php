<?php
for ($i = 1; $i <= 10; $i++){
    $line = "<br>";
    $one = "";
    $space = "";
    for ($l = 9; $l >= $i; $l--){
        $space = $space."*";
    }
    for ($j = 0; $j < $i; $j++){
        $one = $one."1"; 
    }
    for ($j = 0; $j < $i; $j++){
        $one = $one."1"; 
    }
    $line = $line.$space.$one;
    echo $line; 
}
?>