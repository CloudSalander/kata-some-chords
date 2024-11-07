<?php

class ChordPasser {

    private const CHORDS = ["La","Si","Do","Re","Mi","Fa","Sol","Lam","Sim","Dom","Rem","Mim","Fam","Solm"]; 
    private array $chordsToPractice;
    private int $intervalDuration;
    private int $practiceDuration;
    
    public function __construct() {
        $this->chordsToPractice = [];
    }

    private function setChordsToPractice(): void {}
    private function setIntervalDuration(): void {}
    private function setPracticeDuration(): void {}
    private function beginPractice(): void {}

}


?>