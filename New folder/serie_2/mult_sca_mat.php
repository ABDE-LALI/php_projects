<?php
$mat = array([1, 2, 3], [4, 5, 6], [7, 8, 9]);
$scal = 3;
$result = [];
for ($i = 0; $i < count($mat); $i++){
    for ($j = 0; $j < count($mat[0]); $j++){
        $result[$i][$j] = $mat[$i][$j]*$scal;
    }
}
var_dump($result);
echo "<br>";
echo $result[0][0];
?>