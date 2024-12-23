<?php
    for ($i = 2; $i < 100; $i++){
        $is_pre = true;
        // echo "hello1";
        for ($j = 2; $j <= sqrt($i); $j++){
            // echo "hello2";
            if (($i % $j) == 0){
                // echo "hello1";
                 $is_pre = false;
                 break;
            }
        }
        if($is_pre){
            echo " ".$i." ";
        }
    }