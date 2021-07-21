<?php
    $angka=80;
    if($angka>100){
        echo "Nilai Tidak Valid";
    }
    elseif($angka==100){
        echo "A";
    }
    elseif($angka>=80){
        echo "B";
    }
    elseif($angka>=70){
        echo "C";
    }
    elseif($angka>=60){
        echo "D";
    }
    elseif($angka>=0){
        echo "E";
    }
    else echo "Nilai Tidak Valid";