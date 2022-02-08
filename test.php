<?php

$allNotes = ['C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B'];
$arrEscalas = [
    'majorEscale' => [2, 2, 1, 2, 2, 2],
    'minorEscale' => [2, 1, 2, 2, 1, 2],
    'pentatonicEscale' => [2, 2, 3, 2],
    'minorBlues' => [3, 2, 1, 1, 3]
];


foreach($arrEscalas as $key => $escalaAtual){
    
    echo $key . "\n" . $allNotes[0];
    $arrNotas = sizeof($escalaAtual);
    $index = 0;

    for ($i = 0; $arrNotas > $i; $i++) {
        $soma = $index + $escalaAtual[$i];
        if ($soma >= sizeof($allNotes)) {
            $soma -= sizeof($allNotes);
        }

        echo " " . $allNotes[$soma];
        $index = $soma;
    }

    echo "\n\n";
}