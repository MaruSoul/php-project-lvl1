<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Gcd extends Engine
{
    public function game()
    {
        line('Find the greatest common divisor of given numbers.');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $numberOne = rand(1, 100);
            $numberTwo = rand(1, 100);
            $this->correctAnswer = gmp_gcd($numberOne, $numberTwo);
            line('Question: ' . $numberOne . ' ' . $numberTwo);
            $this->answer = prompt('Your answer');
            if (is_numeric($this->answer) && $this->answer == $this->correctAnswer) {
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
