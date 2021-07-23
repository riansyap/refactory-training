<?php
$films = json_decode(file_get_contents('films.json'), true);
$total = 0;
foreach ($films as $film){
    $total+=$film['viewers'];
}
echo $total;