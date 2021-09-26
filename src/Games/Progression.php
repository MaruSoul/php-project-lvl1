<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function Progression(string $name, ?string &$answer, ?string &$correctAnswer, ?string &$victory) : void
{
    line('What number is missing in the progression?');
    $numberOfQuestionsAsked = 0;
    $hasWrongAnswer = false;
    $victory = false;

    while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
        $startOfProgression = rand(-100, 100);
        $stepOfProgression = rand(-10, 10);
        $lengthOfProgression = rand(5, 10);
        $progression = [];

        for ($i = 0; $i < $lengthOfProgression; $i++) {
            $progression[] = $startOfProgression + ($stepOfProgression * $i);
        }

        $hiddenElementOfProgression = rand(0, $lengthOfProgression - 1);
        $correctAnswer = $progression[$hiddenElementOfProgression];
        $progression[$hiddenElementOfProgression] = '..';
        line('Question: ' . implode(' ', $progression));
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
            $numberOfQuestionsAsked++;
        } else {
            return;
        }
        if ($numberOfQuestionsAsked == 3) {
            $victory = true;
        }
    }
}
