<?php
$mat = array([1, 2, 3], [4, 5, 6], [7, 8, 9]);
var_dump($mat); 
for ($i = 0; $i < count($mat); $i++){
    $mat[$i][$i] = 0;   
}
echo "<br>";
var_dump($mat)
?>