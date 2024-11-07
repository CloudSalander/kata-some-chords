<?php
/* In the current version, we only take care of 
major an minor chords. We know the existence of more chords */

include("ChordPasser.php");

$chordPasser = new ChordPasser();
$chordPasser->setChordsToPractice();
$chordPasser->setIntervalDuration();
$chordPasser->beginPractice();