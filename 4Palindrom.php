<?php
    $input="Ibu Ratna antar ubi";
    $reverse=strrev($input);
    if(str_replace(' ','',strtolower($input))==str_replace(' ','',strtolower($reverse))){
        echo "true";
    }
    else echo "false";