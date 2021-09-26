<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function Even($name, &$answer, &$correctAnswer, &$victory)
{
    line('Answer "yes" if the number is even, otherwise answer "no"');
    $numberOfQuestionsAsked = 0;
    $hasWrongAnswer = false;
    $victory = false;

    while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
        $number = rand(1, 100);
        $correctAnswer = ($number % 2 == 0) ? 'yes' : 'no';
        line('Question: ' . $number);
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
