<?php

namespace App\Entity;

class Scales
{
    protected $note;
    protected $allNotes = ['C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B'];

    /**
     * Contém o nome da escala e os números são os intervalos em semitons entre uma nota e outra
     * @var array 
     */
    protected $arrScales = [
        'majorScale' => [2, 2, 1, 2, 2, 2],
        'minorScale' => [2, 1, 2, 2, 2, 1],
        'pentatonicScale' => [2, 2, 3, 2],
        'minorBlues' => [3, 2, 1, 1, 3],
        'majorBlues' => [2, 1, 1, 3, 2]
    ];

    public function __construct($note)
    {
        $this->note = $note;
    }

    /**
     * Retorna as escalas musicais, baseado no que foi informado pelo usuário
     * @return string
     */
    public function returnScale()
    {
        if(!$this->validNote()) return '';

        $indexNote = $this->returnNote();
        
        $finalString = '';
        foreach($this->arrScales as $key => $escalaAtual){

            $positionNote = $indexNote;
    
            $finalString .= $key . "\n" . $this->allNotes[$positionNote];
            $arrNotas = sizeof($escalaAtual);
            $index = 0;
        
            for ($i = 0; $arrNotas > $i; $i++) {
                $soma = $positionNote + $escalaAtual[$i];
                if ($soma >= sizeof($this->allNotes)) {
                    $soma -= sizeof($this->allNotes);
                }
        
                $finalString .= " " . $this->allNotes[$soma];
                $positionNote = $soma;
            }
        
            $finalString .= "\n\n";
        }

        return $finalString;
    }

    /**
     * Retorna o número da posição do array pra ser usado no returnScale()
     * @return integer
     */
    public function returnNote()
    {
        $indexNote = 0;

        for($i = 0; sizeof($this->allNotes) > $i; $i++){
                
            if($this->allNotes[$i] == $this->note) {
                return $indexNote = $i; 
            }
        }
    }

    /**
     * Valida se a nota informada pelo usuário é uma nota musical válida
     * @return boolean
     */
    public function validNote()
    {
        if(in_array($this->note, $this->allNotes)){
            return true;
        }

        return false;
    }
}