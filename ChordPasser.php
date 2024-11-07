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
    }

    public function setIntervalDuration(): void {
        //TODO: Input validation
        //$intervalDuration = "not numeric";
        //while(!is_numeric($intervalDuration)) {
            $intervalDuration = intval(readline("What interval between chords?(in seconds,please)"));
        //}
        var_dump($intervalDuration);     
    }
    public function setPracticeDuration(): void {}

    public function beginPractice(): void {
        while(1) {
            var_dump($this->setChordsToPractice());
            $random_chord_index = array_rand($this->chordsToPractice);
            echo $this->chordsToPractice($random_chord_index);
            sleep($this->setIntervalDuration);
        }
    }

}


?>