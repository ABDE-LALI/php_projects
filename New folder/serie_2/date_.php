<?php
function check_date_form($date){
    $date_arr = explode("-",$date);
    $mounth = $date_arr[0];
    $day = $date_arr[1];
    $year = $date_arr[2];
    if (checkdate($mounth, $day, $year))
        echo "format valid";
    else echo "format invalid";
}
check_date_form("3-29-32767");
?>