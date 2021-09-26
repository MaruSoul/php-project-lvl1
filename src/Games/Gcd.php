<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function myGmpGcd($numberOne, $numberTwo)
{
    if (function_exists('gmp_gcd')) {
        return gmp_gcd($numberOne, $numberTwo);
    }

    $max = 1;

    for ($i = 2; $i <= min($numberOne, $numberTwo); $i++) {
        if (($numberOne % $i == 0) && ($numberTwo % $i == 0)) {
            $max = $i;
        }
    }

    return $max;
}

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
            $this->correctAnswer = myGmpGcd($numberOne, $numberTwo);
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
