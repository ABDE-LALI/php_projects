<?php
$str = "tatabatata";
$voyeles = ["a" => "a", "e" => "e", "i" => "i", "o" => "o", "u" => "u", "y" => "y"];
function nbr_voy($str, $voyeles)
{
    $str_len = strlen($str);
    $nbr_voy = 0;
    for ($i = 0; $i < $str_len; $i++) {
        // var_dump($voyeles);
        if (isset($voyeles[$str[$i]])) {
            $nbr_voy++;
        }
    }
    echo $nbr_voy;
}
nbr_voy($str, $voyeles);
