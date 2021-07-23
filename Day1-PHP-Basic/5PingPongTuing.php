<?php
    for($i=1;$i<=100;$i++)
    {
        if($i%3==0 && $i%5==0){
            echo "Tuing".PHP_EOL;
        }
        elseif($i%3==0){
            echo "$i Ping".PHP_EOL;
        }
        elseif($i%5==0){
            echo "$i Pong".PHP_EOL;
        }
        else echo $i.PHP_EOL;
    }