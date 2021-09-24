<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

class Progression extends Engine
{
    public function game()
    {
        line('What number is missing in the progression?');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $startOfProgression = rand(-100, 100);
            $stepOfProgression = rand(-10, 10);
            $lengthOfProgression = rand(5, 10);
            $progression = [];

            for ($i = 0; $i < $lengthOfProgression; $i++) {
                $progression[] = $startOfProgression + ($stepOfProgression * $i);
            }

            $hiddenElementOfProgression = rand(0, $lengthOfProgression - 1);
            $this->correctAnswer = $progression[$hiddenElementOfProgression];
            $progression[$hiddenElementOfProgression] = '..';
            line('Question: ' . implode(' ', $progression));
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
