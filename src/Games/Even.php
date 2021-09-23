<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;
use function cli\line;
use function cli\prompt;

class Even extends Engine
{
    public function game()
    {
        line('Answer "yes" if the number is even, otherwise answer "no"');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $number = rand(1, 100);
            $this->correctAnswer = ($number % 2 == 0) ? 'yes' : 'no';
            line('Question:' . $number);
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
