<?php

class ChordPasser {

    private const CHORDS = ["La","Si","Do","Re","Mi","Fa","Sol","Lam","Sim","Dom","Rem","Mim","Fam","Solm"]; 
    private array $chordsToPractice;
    private int $intervalDuration;
    private int $practiceDuration;
    
    public function __construct() {
        $this->chordsToPractice = [];
    }

    public function setChordsToPractice(): void {
        $number_of_chords = intval(readline("How many chords you want to practice?"));
        $con = 0;
        while($con < $number_of_chords) {
            $chord = readline("Please, enter one of this chords: ".implode(", ",ChordPasser::CHORDS));
            if(in_array($chord,ChordPasser::CHORDS)) {
                $this->setChordsToPractice[] = $chord;
                ++$con;
            }
            else echo "Please, enter right chord";
        }
        var_dump($this->setChordsToPractice);
    }
    
    public function setIntervalDuration(): void {}
    public function setPracticeDuration(): void {}
    public function beginPractice(): void {}

}


?>