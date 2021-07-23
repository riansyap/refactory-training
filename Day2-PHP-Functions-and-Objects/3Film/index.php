<?php
$films = json_decode(file_get_contents('films.json'), true);
$filmf = array_filter(
    $films, 
    fn ($filmf) => $filmf['viewers'] > 500
);
foreach ($filmf as $film){
    echo $film['title'].PHP_EOL;
}