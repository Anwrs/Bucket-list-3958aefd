<?php

echo "Hoe veel activiteiten wil je toevoegen?" .PHP_EOL;
$a = readline("");

if (is_numeric($a)){

} else {
    echo $a . " is geen getal";
    exit;
}

$arry[] = 0;

for($i = 1; $i <= $a; $i++){
    echo "Wat wil je toevoegen aan jouw bucket list?" .PHP_EOL;
    $arry[] = readline("");
}

echo "Op jouw bucket list staat:" .PHP_EOL;
    for ($f = 1; $f <= $a; $f++){
        echo $arry[$f] .PHP_EOL;
    }