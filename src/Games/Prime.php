<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Prime extends Engine
{
    public static function isPrime($num)
    {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return  true;
    }

    public function game()
    {
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;

        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $number = rand(1, 100);
            $this->correctAnswer = self::isPrime($number) ? 'yes' : 'no';
            line('Question: ' . "{$number}");
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
