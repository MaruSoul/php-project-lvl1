<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return  true;
}

function Prime($name, &$answer, &$correctAnswer, &$victory)
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $numberOfQuestionsAsked = 0;
    $hasWrongAnswer = false;
    $victory = false;

    while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
        $number = rand(1, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        line('Question: ' . "{$number}");
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
