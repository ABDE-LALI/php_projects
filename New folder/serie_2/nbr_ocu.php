<?php
function nbr_ocu($tab, $x){
    $nbr_oc = 0;
    for ($i = 0; $i < count($tab); $i++){
        if ($tab[$i] === $x){
            $nbr_oc++;
        }
    }
    return $nbr_oc;
}
echo nbr_ocu([5, 5, 4, 5, 5, 5, 5, 5, 5, 5], 3);
?>