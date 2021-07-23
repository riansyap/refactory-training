<?php
    $input="Hari ini saya ingin pergi ke pasar";
    $sensors=['saya','pasar'];
    $input=explode(' ',$input);
    foreach($sensors as $sensor){
        $i=0;
        foreach($input as $kata){
            if(strtolower($sensor)==strtolower($kata)){
                $input[$i]= '***';
            }
            $i++;
        }
    }
    $input=implode(' ',$input);
    echo $input;

