<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;
use function cli\line;
use function cli\prompt;

class Calc extends Engine
{
    public function game()
    {
        line('What is the result of the expression?');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;

        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
      
            $numberOne = rand(1, 100);
            $numberTwo = rand(1, 100);
            $randomSymbolGeneration = rand(1, 3);
      
            if ($randomSymbolGeneration == 1) {
                $symbol = "+";
                $this->correctAnswer = $numberOne + $numberTwo;
            } elseif ($randomSymbolGeneration == 2) {
                $symbol = '-';
                $this->correctAnswer = $numberOne - $numberTwo;
            } else {
                $symbol = '*';
                $this->correctAnswer = $numberOne * $numberTwo;
            }
            line('Question: ' . "{$numberOne} {$symbol} {$numberTwo}");
            $this->answer = prompt('Your answer');

            if ($this->answer == $this->correctAnswer) {
                line('Correct!');
                $numberOfQuestionsAsked++;
            } else {
                return;
            }
            if ($numberOfQuestionsAsked == 3) {
                $this->victory = true;
            }
        }
    }
}
