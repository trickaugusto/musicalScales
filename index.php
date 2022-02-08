<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Scales;

echo "Escolha a nota desejada: ";
$note = trim(strtoupper(fgets(STDIN)));

$scales = new Scales($note);

$result = $scales->returnScale();

if(!$result){
    echo "Mula, você não serve pra ser músico";
} else {
    echo $result;
}