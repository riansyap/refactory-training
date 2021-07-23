<?php
    $array = [4, 2, 100, 143, 94, 7, 10, 55, 9, 48, 36];
    $size = count($array)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($array[$k] < $array[$j]) {
                $temp = $array[$k];
                $array[$k] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    print_r($array);