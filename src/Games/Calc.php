<?php

namespace Hexlet\Code\Games;

use function cli\line;
use function cli\prompt;

function Calc($name, &$answer, &$correctAnswer, &$victory)
{
    line('What is the result of the expression?');
    $numberOfQuestionsAsked = 0;
    $hasWrongAnswer = false;
    $victory = false;

    while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
        $numberOne = rand(1, 100);
        $numberTwo = rand(1, 100);
        $randomSymbolGeneration = rand(1, 3);
        if ($randomSymbolGeneration == 1) {
            $symbol = "+";
            $correctAnswer = $numberOne + $numberTwo;
        } elseif ($randomSymbolGeneration == 2) {
            $symbol = '-';
            $correctAnswer = $numberOne - $numberTwo;
        } else {
            $symbol = '*';
            $correctAnswer = $numberOne * $numberTwo;
        }
        line('Question: ' . "{$numberOne} {$symbol} {$numberTwo}");
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
