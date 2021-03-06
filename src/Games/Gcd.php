<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function myGmpGcd(float $numberOne, float $numberTwo): int
{
    $numberOne = abs($numberOne);
    $numberTwo = abs($numberTwo);
    $max = 1;

    for ($i = 2; $i <= min($numberOne, $numberTwo); $i++) {
        if (($numberOne % $i == 0) && ($numberTwo % $i == 0)) {
            $max = $i;
        }
    }

    return intval($max);
}

function Gcd(string $name, ?string &$answer, ?string &$correctAnswer, ?string &$victory): void
{
    line('Find the greatest common divisor of given numbers.');
    $numberOfQuestionsAsked = 0;
    $hasWrongAnswer = false;
    $victory = false;

    while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
        $numberOne = rand(1, 100);
        $numberTwo = rand(1, 100);
        $correctAnswer = myGmpGcd($numberOne, $numberTwo);
        line('Question: ' . $numberOne . ' ' . $numberTwo);
        $answer = prompt('Your answer');
        if (is_numeric($answer) && $answer == $correctAnswer) {
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
