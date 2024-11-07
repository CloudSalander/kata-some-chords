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
                $this->chordsToPractice[] = $chord;
                ++$con;
            }
            else echo "Please, enter right chord";
        }
    }

    public function setIntervalDuration(): void {
        $intervalDuration = "";
        while(!is_numeric($intervalDuration)) {
            $intervalDuration = intval(readline("What interval between chords?(in seconds,please)"));
        }
        $this->intervalDuration = $intervalDuration;
    }
    public function setPracticeDuration(): void {
        $practiceDuration = "";
        while(!is_numeric($practiceDuration)) {
            $practiceDuration = intval(readline("What time you want to practice?(in minutes,please)"));
        }
        $this->practiceDuration = $practiceDuration*60; #We will use seconds here.
    }

    public function beginPractice(): void {
        $begin_time = $current_time = time();
        while(($current_time - $begin_time) < $this->practiceDuration) {
            $random_chord_index = array_rand($this->chordsToPractice);
            echo $this->chordsToPractice[$random_chord_index].PHP_EOL;
            sleep($this->intervalDuration);
            $current_time = time();
        }
    }

}


?>